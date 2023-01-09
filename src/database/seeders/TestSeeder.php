<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create(['nome' => 'teste1']);
        Test::create(['nome' => 'teste2']);
        Test::create(['nome' => 'teste3']);
    }
}
