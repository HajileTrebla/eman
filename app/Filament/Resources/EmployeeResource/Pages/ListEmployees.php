<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Filament\Widgets\EmployeeStatsOverview;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployees extends ListRecords
{

    //use HasPageShield;

    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected  function getHeaderWidgets(): array
    {
        return [
            EmployeeStatsOverview::class,
        ];
    }

    protected function getShieldRedirectPath(): string {
        return '/'; // redirect to the root index...
    }
}
