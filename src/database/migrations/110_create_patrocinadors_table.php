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
        Schema::create('patrocinadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('identificacao');
            $table->enum('tipoPessoa', [0, 1]); //0 -> física, 1 -> jurídica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrocinadors');
    }
};
