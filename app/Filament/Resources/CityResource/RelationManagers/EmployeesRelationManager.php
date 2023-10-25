<?php

namespace App\Filament\Resources\CityResource\RelationManagers;

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

class EmployeesRelationManager extends RelationManager
{
    protected static string $relationship = 'employees';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Name')
                ->schema([
                    TextInput::make('first_name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('last_name')
                        ->maxLength(255)
                        ->required(),
                ]),
                Fieldset::make('Department')
                ->schema([
                    Select::make('department_id')
                        ->relationship('department', 'name')
                        ->required(),
                    DatePicker::make('date_hired')
                        ->required(),
                ]),
                Fieldset::make('Address')
                ->schema([
                    Select::make('city_id')
                        ->label('City')
                        ->options(City::all()->pluck('name', 'id')->toArray())
                        ->reactive()
                        ->afterStateUpdated(
                            fn (callable $set) => $set('state_id', 'null')
                        ),
                    Select::make('district_id')
                        ->label('District')
                        ->options(function (callable $get) {
                            $city = City::find($get('country_id'));
                            if(!$city){
                                return District::all()->pluck('name', 'id');
                            }
                            return $city->districts->pluck('name', 'id');
                        })
                        ->reactive(),
                    TextInput::make('address')
                        ->columnSpan(2)
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('zip_code')
                        ->maxLength(255)
                        ->required(),
                ]),
                Fieldset::make()
                ->schema([
                    DatePicker::make('birth_date')
                        ->required(),
                ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('first_name')
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->searchable(),
                TextColumn::make('first_name')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('city.name')
                    ->searchable(),
                TextColumn::make('district.name')
                    ->searchable(),
                TextColumn::make('zip_code')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('department.name')
                    ->searchable(),
                TextColumn::make('date_hired')
                    ->date()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('birth_date')
                    ->date()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
