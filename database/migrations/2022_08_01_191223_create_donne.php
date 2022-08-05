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
        Schema::create('donne', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("equipe1");
            $table->integer("equipe2");
            $table->integer('game_id');
            $table->foreign('game_id')->references('id')->on('game');
            $table->boolean('10der');
            $table->boolean('beloteEtRe');
            $table->boolean('capot');
            $table->string('prise');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donne');
    }
};
