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
            $table->float("preco_ingresso", 10, 2)->default(0);
            $table->float("preco_transmissao", 10, 2)->default(0);
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
