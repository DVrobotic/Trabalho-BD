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
        Schema::create('campeonatos_equipes', function (Blueprint $table){
            $table->unsignedBigInteger('campeonato_id')->index();
            $table->unsignedBigInteger('equipe_id')->index();

            $table->foreign('campeonato_id')
                ->references('id')
                ->on('campeonatos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('equipe_id')
                ->references('id')
                ->on('equipes')
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
        Schema::dropIfExists('campeonatos_equipes');
    }
};
