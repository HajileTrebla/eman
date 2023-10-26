<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [   
            ['name'=>'Manila', 'city_code'=>'MNL','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Navotas', 'city_code'=>'NAV','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Makati', 'city_code'=>'MTI','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Caloocan', 'city_code'=>'CAC','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Quezon City', 'city_code'=>'QZT','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pasay', 'city_code'=>'PSC','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pasig', 'city_code'=>'PSG','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Mandaluyong', 'city_code'=>'MDL','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Juan', 'city_code'=>'NJU','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Paranaque', 'city_code'=>'PPA','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Las Pinas', 'city_code'=>'APN','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Muntinlupa', 'city_code'=>'MNT','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Taguig', 'city_code'=>'TAU','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pateros', 'city_code'=>'PAT','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marikina', 'city_code'=>'MAR','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malabon', 'city_code'=>'MBL','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Valenzuela', 'city_code'=>'VZA','created_at' => date("Y-m-d H:i:s")],
        ];
        

        DB::table('cities')->insert($cities);
    }
}
