<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Models\City;
use App\Models\District;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeRelationManager extends RelationManager
{
    protected static string $relationship = 'employee';

    public function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->recordTitleAttribute('first_name')
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('last_name'),
                TextColumn::make('first_name'),
                TextColumn::make('address'),
                TextColumn::make('city.name'),
                TextColumn::make('district.name'),
                TextColumn::make('zip_code'),
                TextColumn::make('department.name'),
                TextColumn::make('date_hired')
                    ->date(),
                TextColumn::make('birth_date')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                //
            ]);
    }
}
