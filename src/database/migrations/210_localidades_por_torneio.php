<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        DB::statement
        (
            "
            CREATE OR REPLACE VIEW localidades_torneio as
            select
                c.id as campeonatoId,
                count(l.id) as totalLocalidades,
                GROUP_CONCAT(l.nome) as localidadesNomes
            from campeonatos c
            left join partidas p on p.campeonato_id = c.id
            left join localidades l on l.id = p.localidade_id
            group by c.id
            order by count(l.id) DESC
            "
        );
    }

    public function down()
    {
        DB::statement("DROP IF EXISTS VIEW localidades_torneio");
    }
};
