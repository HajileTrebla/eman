<?php

namespace App\Filament\Widgets;

use App\Models\City;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Employees', Employee::all()->count()),
        ];
    }
}
