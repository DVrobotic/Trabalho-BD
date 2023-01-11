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
        Schema::create('premiacoes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->float('valor',10, 2)->default(0);
            $table->unsignedBigInteger('campeonato_id');

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
        Schema::dropIfExists('premiacaos');
    }
};
