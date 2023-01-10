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
        Schema::create('campeonato_com_grupos', function (Blueprint $table) {
            $table->id();
            $table->integer('tamanhoGrupo');
            $table->unsignedBigInteger('campeonato_id')->index();

            $table->foreign('campeonato_id')
                ->references('id')
                ->on('campeonatos')
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
        Schema::dropIfExists('campeonato_com_grupos');
    }
};
