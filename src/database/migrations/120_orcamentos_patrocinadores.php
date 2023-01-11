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
        Schema::create('orcamentos_patrocinadores', function (Blueprint $table) {
            $table->unsignedBigInteger('orcamento_id')->index();
            $table->unsignedBigInteger('patrocinador_id')->index();

            $table->primary(['orcamento_id', 'patrocinador_id'], 'orcamento_equipamento');

            $table->foreign('orcamento_id')
                ->references('id')
                ->on('orcamentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('patrocinador_id')
                ->references('id')
                ->on('patrocinadores')
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
        schema::dropIfExists('orcamentos_patrocinadores');
    }
};
