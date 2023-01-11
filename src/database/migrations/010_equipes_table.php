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
        Schema::create('equipes', function (Blueprint $table)
        {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('modalidade_id')->index();
            $table->unsignedBigInteger('federacao_id')->index()->nullable();

            $table->foreign('federacao_id')
                ->references('id')
                ->on('federacoes')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('modalidade_id')
                ->references('id')
                ->on('modalidades')
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
        Schema::dropIfExists('equipes');
    }
};
