<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\EmployeeCityChart;
use App\Filament\Widgets\EmployeeStatsOverview;
use Filament\Pages\Dashboard as FilamentDashboard;

class Dashboard extends FilamentDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $title = 'Admin Dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            EmployeeStatsOverview::class,
            EmployeeCityChart::class,
        ];
    }
}
