<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReproductorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reproductor', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titulo');
            $table->string('autor');
            $table->string('categoria');
            $table->string('musica');
            $table->string('estado')->default(1);
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
        Schema::dropIfExists('reproductor');
    }
}
