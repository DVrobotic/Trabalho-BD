<?php

namespace App\Http\Livewire;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class QueryMaker extends Component
{
    public ?string $query = null;

    public function makeQuery()
    {

    }

    public function render()
    {
        $result = null;

        if($this->query != null)
        {
            try{
                $result = DB::select( DB::raw($this->query ?? "SELECT * FROM tests"));

            }catch (Exception $exception)
            {
                $result = "Erro: " . $exception->getMessage();
            }
        }

        if(empty($result) && Str::contains(Str::upper($this->query), Str::upper('select')))
        {
            $result = "Nenhum resultado encontrado!";
        } else if(empty($result))
        {
            $result = "comando realizado com sucesso!";
        }


        return view('livewire.query-maker', compact('result'));
    }
}
