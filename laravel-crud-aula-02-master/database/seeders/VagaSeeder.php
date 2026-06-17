<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["descricao" => "A1", "status" =>"vazia"],
            ["descricao" => "A2", "status" =>"vazia"],
            ["descricao" => "A3", "status" =>"vazia"],
            ["descricao" => "B1", "status" =>"vazia"],
        ];
        DB::table('vagas')->insert($data);
    }
}
