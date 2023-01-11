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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->boolean('empate');
            $table->unsignedBigInteger('pontos');
            $table->unsignedBigInteger('partida_id')->index();
            $table->unsignedBigInteger('vencedor_id')->index()->nullable();

            $table->foreign('partida_id')
                ->references('id')
                ->on('partidas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('vencedor_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('set null')
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
        Schema::dropIfExists('resultados');
    }
};
