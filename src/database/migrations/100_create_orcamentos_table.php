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
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->float("gasto_localidade", 10, 2)->default(0);
            $table->float("gasto_premio", 10, 2)->default(0);
            $table->float("lucro_esperado", 10, 2)->default(0);
            $table->float("preço_ingresso", 10, 2)->default(0);
            $table->float("preço_transmissao", 10, 2)->default(0);
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
        Schema::dropIfExists('orcamentos');
    }
};
