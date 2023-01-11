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
            CREATE OR REPLACE VIEW equipes_vencedoras as
            select
                    p.id as partidaId,
                    r.vencedor_id,
                    ce.campeonato_id,
                    f.numero as fase,
                    count(distinct r.id) as totalDeVitorias
                from equipes e
                inner join campeonatos_equipes ce on ce.equipe_id = e.id
                inner join fases f on f.campeonato_id = ce.campeonato_id
                inner join partidas p on p.fase_id = f.id
                left join resultados r on r.partida_id = p.id
                group by p.id, r.vencedor_id, ce.campeonato_id, f.numero
                having count(*) * 2 >
                (
                    select
                        count(distinct r2.id) as totalDeVitorias
                    from equipes e2
                    inner join campeonatos_equipes ce2 on ce2.equipe_id = e2.id
                    inner join fases f2 on f2.campeonato_id = ce2.campeonato_id
                    inner join partidas p2 on p2.fase_id = f2.id
                    left join resultados r2 on r2.partida_id = p2.id
                    where p.id = p2.id and
                    ce2.campeonato_id = ce.campeonato_id and
                    f.numero = f2.numero
                    group by p2.id, ce2.campeonato_id, f2.numero
                )
            "
        );
    }

    public function down()
    {
        DB::statement("DROP IF EXISTS VIEW equipes_vencedoras");
    }
};
