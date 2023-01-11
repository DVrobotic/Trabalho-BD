<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        DB::unprepared
        ("
            CREATE TRIGGER partidas_por_fases_delete_trigger AFTER Delete ON `campeonatos_equipes` FOR EACH ROW
            BEGIN
                update fases
                SET quantidadePartidas =
                (
                    select CEIL(count(*) / POW(2, fases.numero))
                    from equipes
                    inner join campeonatos_equipes
                        on campeonatos_equipes.equipe_id = equipes.id
                        and campeonatos_equipes.campeonato_id = OLD.campeonato_id
                )
                where fases.campeonato_id = OLD.campeonato_id;
            END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `partidas_por_fases_delete_trigger`');
    }
};
