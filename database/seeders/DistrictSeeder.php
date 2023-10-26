<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mnl = [
            ['name'=>'Tondo', 'city_id'=>'1', 'created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Binondo', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Cruz', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sampaloc', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Miguel', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pandacan', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Ana', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Paco', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malate', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ermita', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Intramuros', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Quiapo', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Andres', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Nicolas', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Mesa', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Port Area', 'city_id'=>'1','created_at' => date("Y-m-d H:i:s")],
        ];

        $nav = [
            ['name'=>'Bagumabayan North', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagumabayan South', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Navotas East', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Navotas West', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bangkulasi', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Daanghari', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'NBBS Dagat-Dagatan', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'NBBS Kaunlaran', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'NBBS Proper', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'NBBN', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Jose', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Rafael', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Roque', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sipac-Almasen', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tangos North', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tangos South', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tanza 1', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tanza 2', 'city_id'=>'2','created_at' => date("Y-m-d H:i:s")],
        ];

        $mti = [
            ['name'=>'Bangkal', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bel-Air', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Carmona', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Dasmarinas', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Forbes Park', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kasilawan', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'La Paz', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Magallanes', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Olympia', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Palanan', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pio Del Pilar', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Antonio', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Isidro', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Lorenzo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Singkamas', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Cruz', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tejeros', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Urdaneta', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Valenzuela', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Cembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Comembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'East Rembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Guadalupe Viejo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Guadalupe Nuevo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pinagkaisahan', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pitogo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Post Proper Northside', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Post Proper Southside', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Rizal', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'South Cembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'West Rembo', 'city_id'=>'3','created_at' => date("Y-m-d H:i:s")],
        ];

        $cac = [
            ['name'=>'Sangandaan', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Dagat-Dagatan', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kaunlaran-Village', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maypajo', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marulas', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Grace Park West', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Grace Park East', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'University Hills', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Morning Breeze Subdivision', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Balintawak', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Barrio San Jose', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Barrio East', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Barrio West', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Libis Baesa', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Libis Reparo', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Quiteria', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talipapa', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagbaguin', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kaybiga', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Llano', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Deparo', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Deparo 2', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'BF Homes', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagumbong', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Urduja Village', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Congress', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Camarin', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Silang', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Amparo', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tala', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pangarap Village', 'city_id'=>'4','created_at' => date("Y-m-d H:i:s")],
        ];

        $qzt = [
            ['name'=>'Cubao', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Diliman', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Galas-Santol', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'La Loma', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'New Manila', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Novaliches', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Francisco Del Monte', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Mesa Heights', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 1', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 2', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 3', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 4', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 5', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 6', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 7', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Project 8', 'city_id'=>'5','created_at' => date("Y-m-d H:i:s")],
        ];

        $psc = [
            ['name'=>'Apelo Cruz', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Baclaran', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Baltao', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bay City', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Cabrera', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Cartimar', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Cuyegkeng', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Don Carlos Village', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Edang', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'F.B. Harrisson', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Juan Sumulong', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kalayaan', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Leveriza', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Libertad', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malibay', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Manila Bay Reclamation', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marcela Marcelo', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maricaban', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'M. Dela Cruz', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Newport City', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Nichols', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Padre Burgos', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pasay Rotonda', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'PICC', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pildera I', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pildera II', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Rivera Village', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Pablo', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Isidro', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Jose', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Rafael', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Roque', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Clara', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Nino', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tramo', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tripa de Gallina', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ventanilla', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Villamor', 'city_id'=>'6','created_at' => date("Y-m-d H:i:s")],
        ];

        $psg = [
            ['name'=>'Bagong Ilog', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Katipunan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bambang', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Buting', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Caniogan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Dela Paz', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kalawaan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kapasigan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kapitolyo', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malinao', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Manggahan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Leveriza', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maybunga', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Oranbo', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Palatiw', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pinagbuhatan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pineda', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Rosario', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sagad', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Antonio', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Joaquin', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Jose', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Miguel', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Nicolas', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Cruz', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Lucia', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Rosa', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Tomas', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santolan', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sumilang', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ugong', 'city_id'=>'7','created_at' => date("Y-m-d H:i:s")],
        ];

        $mdl = [
            ['name'=>'Addition Hills', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Silang', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Barangka Drive', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Barangka Ibaba', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Barangka Ibaba', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Barangka Itaas', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Buayang Bato', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Burol', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Daang Bakal', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Hagdan Bato Itaas', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Hagdan Bato Libis', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Harapin Ang Bukas', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Highway Hills', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Hulo', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Mabini-J.Rizal', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malamig', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maluway', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Namayan', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'New Zaniga', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Old Zaniga', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pag-Asa', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Plainview', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pleasan Hills', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Jose', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Vergara', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Wack-Wack Greenhills', 'city_id'=>'8','created_at' => date("Y-m-d H:i:s")],
        ];

        $nju = [
            ['name'=>'Addition Hills', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Balong-Bato', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Batis', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Corazon de Jesus', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ermitano', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Greenhills', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Isabelita', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Kabayanan', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Little Baguio', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maytunas', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Onse', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pasadena', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pedro Cruz', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Progreso', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Rivera', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Saint Joseph', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Salapan', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Perfecto', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Lucia', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tibagan', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'West Crame', 'city_id'=>'9','created_at' => date("Y-m-d H:i:s")],
        ];

        $ppa = [
            ['name'=>'Baclaran', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'BF Homes', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Don Bosco', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Don Galo', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'La Huerta', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marcelo Green', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Merville', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Moonwalk', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Antonio', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Dionisio', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Isidro', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Martin de Porres', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Nino', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sun Valley', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tambo', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Vitalez', 'city_id'=>'10','created_at' => date("Y-m-d H:i:s")],
        ];

        $apn = [
            ['name'=>'Almanza Uno', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Almanza Dos', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'C.A.A - B.F. International', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Daniel Fajardo ', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Elias Aldana', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ilaya', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Manuyo Uno', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Manuyo Dos', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pamplona Uno', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pamplona Dos', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pamplona Tres', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pilar Village', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pulang Lupa Uno', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pulang Lupa Dos', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talon Uno', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talon Dos', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talon Tres', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talon Kuatro', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Talon Singko', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Zapote', 'city_id'=>'11','created_at' => date("Y-m-d H:i:s")],
        ];

        $mnt = [
            ['name'=>'Alabang', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ayala Alabang', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bayanan', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Buli', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Cupang', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Putatan', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Sucat', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tunasan', 'city_id'=>'12','created_at' => date("Y-m-d H:i:s")],
        ];

        $tau = [
            ['name'=>'Bagumbayan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bambang', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Calzada', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Hagonoy', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ibayo Tipas', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ligid Tipas', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Lower Bicutan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'New Lower Bicutan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Upper Bicutan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Western Bicutan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Napindan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Palingon', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Miguel', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Ana', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tuktukan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ususan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Wawa', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagong Tanyag', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Central Bicutan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Central Signal Village', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Fort Bonifacio', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Katuparan', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maharlika Village', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'North Daang Hari', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'North Signal Village', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pinagsama', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'South Daang Hari', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'South Signal Village', 'city_id'=>'13','created_at' => date("Y-m-d H:i:s")],
        ];

        $pat = [
            ['name'=>'Aguho', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Magtanggol', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maritez del 96', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Pedro', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Roque', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Ana', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Rosario-Kanluran', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Rosario-Silangan', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tabacalera', 'city_id'=>'14','created_at' => date("Y-m-d H:i:s")],
        ];

        $mar = [
            ['name'=>'Barangka', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Calumpang', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Concepcion Uno', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Concepcion Dos', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Fortune', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Industrial Valler', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Jesus de la Pena', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malanday', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marikina Heights', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Nangka', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Parang', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Roque', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santa Elena', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santo Nino', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tanong', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tumana', 'city_id'=>'15','created_at' => date("Y-m-d H:i:s")],
        ];

        $mbl = [
            ['name'=>'Baritan', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bayan-bayanan', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Catmon', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Concepcion', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Dampalit', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Flores', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Hulong Duhat', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ibaba', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maysilo', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Muzon', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Niugan', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Panghulo', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'San Agustin', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Santulan', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tanong', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Acacia', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Longos', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Potrero', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tinajeros', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tonsuya', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tugatog', 'city_id'=>'16','created_at' => date("Y-m-d H:i:s")],
        ];

        $vza = [
            ['name'=>'Arkong Bato', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bagbaguin', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Balangkas', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bignay', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Bisig', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Canumay East', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Canumay West', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Coloong', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Dalandanan', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Gen. T. de Leon', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Isla', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Karuhatan', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Lawang Bato', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Lingunan', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Mabolo', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malanday', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Malinta', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Mapulang Lupa', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Marulas', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Maysan', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Palasan', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Parada', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pariancillo Villa', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Paso de Blas', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Pasolo', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Poblacion', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Polo', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Punturin', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Rincon', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Tagalag', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Ugong', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Viente Reales', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Valenzuela', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
            ['name'=>'Wawang Pulo', 'city_id'=>'17','created_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('districts')->insert($mnl);
        DB::table('districts')->insert($nav);
        DB::table('districts')->insert($mti);
        DB::table('districts')->insert($cac);
        DB::table('districts')->insert($qzt);
        DB::table('districts')->insert($psc);
        DB::table('districts')->insert($psg);
        DB::table('districts')->insert($mdl);
        DB::table('districts')->insert($nju);
        DB::table('districts')->insert($ppa);
        DB::table('districts')->insert($apn);
        DB::table('districts')->insert($mnt);
        DB::table('districts')->insert($tau);
        DB::table('districts')->insert($pat);
        DB::table('districts')->insert($mar);
        DB::table('districts')->insert($mbl);
        DB::table('districts')->insert($vza);
    }
}
