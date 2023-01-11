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
        Schema::create('campeonatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('inicio');
            $table->date('final');
            $table->unsignedBigInteger('modalidade_id')->index();
            $table->unsignedBigInteger('orcamento_id')->index()->nullable();

            $table->foreign('modalidade_id')
                ->references('id')
                ->on('modalidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('orcamento_id')
                ->references('id')
                ->on('orcamentos')
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
        Schema::dropIfExists('campeonatos');
    }
};
