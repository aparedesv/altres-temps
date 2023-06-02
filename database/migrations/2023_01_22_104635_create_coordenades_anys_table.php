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
        Schema::create('coordinates_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_coordinate');
            $table->unsignedBigInteger('id_year');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key
            $table->foreign('id_coordinate')
                ->references('id')
                ->on('coordinates')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_year')
                ->references('id')
                ->on('years')
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
