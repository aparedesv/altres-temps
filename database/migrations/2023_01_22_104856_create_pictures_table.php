<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_coordinate');
            $table->string('picture');
            $table->string('name')->nullable();
            $table->date('date');
            $table->boolean('public')->default(TRUE);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key
            $table->foreign('id_coordinate')
                ->references('id')
                ->on('coordinates')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
};
