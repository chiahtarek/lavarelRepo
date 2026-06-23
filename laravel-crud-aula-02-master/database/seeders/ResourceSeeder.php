<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // CARRO
            ["name" => "carro.index"],	// 1
            ["name" => "carro.create"],	// 2
            ["name" => "carro.show"],	// 3
            ["name" => "carro.edit"],	// 4
            ["name" => "carro.delete"],	// 5
            // TICKET
            ["name" => "ticket.index"],	// 6
            ["name" => "ticket.create"],	// 7
            ["name" => "ticket.show"],	// 8
            ["name" => "ticket.edit"],	// 9
            ["name" => "ticket.delete"],	// 10
            // CLIENTE
            ["name" => "cliente.index"],	// 11
            ["name" => "cliente.create"],	// 12
            ["name" => "cliente.show"],	// 13
            ["name" => "cliente.edit"],	// 14
            ["name" => "cliente.delete"],	// 15
        ];
        DB::table('resources')->insert($data);
    }
}