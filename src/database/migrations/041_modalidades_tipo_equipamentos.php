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
        Schema::create('modalidades_tipo_equipamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('modalidade_id')->index();
            $table->unsignedBigInteger('tipo_equipamento_id')->index();

            $table->foreign('modalidade_id')
                ->references('id')
                ->on('modalidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tipo_equipamento_id')
                ->references('id')
                ->on('tipo_equipamentos')
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
        schema::dropIfExists('modalidades_tipo_equipamentos');
    }
};
