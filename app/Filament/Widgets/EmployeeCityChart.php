<?php

namespace App\Filament\Widgets;

use App\Models\City;
use App\Models\Employee;
use Filament\Widgets\ChartWidget;

class EmployeeCityChart extends ChartWidget
{
    protected static ?string $heading = 'Employee per City';

    protected static bool $isLazy = true;

    protected function getData(): array
    {
        $mnl = Employee::where('city_id', 1)->count();
        $nav = Employee::where('city_id', 2)->count();
        $mti = Employee::where('city_id', 3)->count();
        $cac = Employee::where('city_id', 4)->count();
        $qzt = Employee::where('city_id', 5)->count();
        $psc = Employee::where('city_id', 6)->count();
        $psg = Employee::where('city_id', 7)->count();
        $mdl = Employee::where('city_id', 8)->count();
        $nju = Employee::where('city_id', 9)->count();
        $ppa = Employee::where('city_id', 10)->count();
        $apn = Employee::where('city_id', 11)->count();
        $mnt = Employee::where('city_id', 12)->count();
        $tau = Employee::where('city_id', 13)->count();
        $pat = Employee::where('city_id', 14)->count();
        $mar = Employee::where('city_id', 15)->count();
        $mbl = Employee::where('city_id', 16)->count();
        $vza = Employee::where('city_id', 17)->count();
        return [
                'datasets' => [
                    [
                        'label' => 'Employees',
                        'data' => [$mnl,$mti,$nav,$cac,$qzt,$psc,$psg,$mdl,$nju,$ppa,$apn,$mnt,$tau,$pat,$mar,$mbl,$vza],
                    ],
                ],
                'labels' => ['MNL','MTI','NAV','CAC','QZT','PSC','PSG','MDL','NJU','PPA','APN','MNT','TAU','PAT','MAR','MBL','VZA'],
            ];
    }



    protected function getType(): string
    {
        return 'bar';
    }
}
