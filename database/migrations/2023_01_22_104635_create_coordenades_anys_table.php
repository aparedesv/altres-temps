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
        Schema::create('coordenades_anys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_coordenades');
            $table->unsignedBigInteger('id_any');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key
            $table->foreign('id_coordenades')
                ->references('id')
                ->on('coordenades')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_any')
                ->references('id')
                ->on('anys')
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
        Schema::dropIfExists('coordenades_anys');
    }
};
