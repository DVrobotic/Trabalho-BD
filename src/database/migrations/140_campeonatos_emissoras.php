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
        Schema::create('campeonatos_emissoras', function (Blueprint $table) {
            $table->unsignedBigInteger('campeonato_id')->index();
            $table->unsignedBigInteger('emissora_id')->index();

            $table->primary(['campeonato_id', 'emissora_id'], 'campeonato_equipamento');

            $table->foreign('campeonato_id')
                ->references('id')
                ->on('campeonatos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('emissora_id')
                ->references('id')
                ->on('emissoras')
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
        schema::dropIfExists('campeonatos_emissoras');
    }
};
