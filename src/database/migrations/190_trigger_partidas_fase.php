<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared
        ("
            CREATE TRIGGER partidas_por_fases_trigger BEFORE INSERT ON `fases` FOR EACH ROW
            BEGIN
                SET NEW.quantidadePartidas =
                (
                    select CEIL(count(*) / POW(2, NEW.numero))
                    from equipes
                    inner join campeonatos_equipes
                        on campeonatos_equipes.equipe_id = equipes.id
                        and campeonatos_equipes.campeonato_id = NEW.campeonato_id
                );
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
        DB::unprepared('DROP TRIGGER `partidas_por_fases_trigger`');
    }
};
