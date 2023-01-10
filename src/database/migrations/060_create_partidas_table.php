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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->date('datahora')->index();
            $table->unsignedBigInteger('campeonato_id')->index();
            $table->unsignedBigInteger('fase_id')->index();
            $table->unsignedBigInteger('equipe1_id')->index();
            $table->unsignedBigInteger('equipe2_id')->index();
            $table->unsignedBigInteger('localidade_id')->index();

            $table->foreign('campeonato_id')
                ->references('id')
                ->on('campeonatos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fase_id')
                ->references('id')
                ->on('fases')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('equipe1_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('equipe2_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('localidade_id')
                ->references('id')
                ->on('localidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
};
