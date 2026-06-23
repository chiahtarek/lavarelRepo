<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
       // GERENTE
            ["role_id" => 2, "resource_id" => 1],
            ["role_id" => 2, "resource_id" => 2],
            ["role_id" => 2, "resource_id" => 3],
            ["role_id" => 2, "resource_id" => 4],
            ["role_id" => 2, "resource_id" => 5],
            ["role_id" => 2, "resource_id" => 6],
            ["role_id" => 2, "resource_id" => 7],
            ["role_id" => 2, "resource_id" => 8],
            ["role_id" => 2, "resource_id" => 9],
            ["role_id" => 2, "resource_id" => 10],
            ["role_id" => 2, "resource_id" => 11],
            ["role_id" => 2, "resource_id" => 12],
            ["role_id" => 2, "resource_id" => 13],
            ["role_id" => 2, "resource_id" => 14],
            ["role_id" => 2, "resource_id" => 15],
            //  ATENDENTE
            ["role_id" => 1, "resource_id" => 1],
            ["role_id" => 1, "resource_id" => 2],
            ["role_id" => 1, "resource_id" => 3],
            ["role_id" => 1, "resource_id" => 4],
            ["role_id" => 1, "resource_id" => 5],
            ["role_id" => 1, "resource_id" => 7],
            ["role_id" => 1, "resource_id" => 11],
            ["role_id" => 1, "resource_id" => 12],
            ["role_id" => 1, "resource_id" => 13],
        ];
        DB::table('permissions')->insert($data);
    }
}