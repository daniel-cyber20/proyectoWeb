<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cines', function (Blueprint $table) {
            $table->id();

            $table->string('Foto');
            $table->string('Nombre');
            $table->string('FechaEstreno');
            $table->string('Rating');
            $table->string('Trailer');
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cines');
    }
}
