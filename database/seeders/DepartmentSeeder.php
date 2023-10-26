<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depts = [
            ['name' => 'Management','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Finance','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Production','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'DevOps','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Research and Development','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Marketing','created_at' => date("Y-m-d H:i:s")],
            ['name' => 'Logistics','created_at' => date("Y-m-d H:i:s")],
        ];        

        DB::table('departments')->insert($depts);
    }
}
