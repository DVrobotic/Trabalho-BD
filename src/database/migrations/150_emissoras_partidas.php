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
        Schema::create('emissoras_partidas', function (Blueprint $table) {
            $table->unsignedBigInteger('emissora_id')->index();
            $table->unsignedBigInteger('partida_id')->index();

            $table->primary(['emissora_id', 'partida_id'], 'emissora_equipamento');

            $table->foreign('emissora_id')
                ->references('id')
                ->on('emissoras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('partida_id')
                ->references('id')
                ->on('partidas')
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
        schema::dropIfExists('emissoras_partidas');
    }
};
