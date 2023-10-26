<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Filament\Resources\EmployeeResource\RelationManagers\OfUserRelationManager;
use App\Filament\Resources\UserResource\RelationManagers\UserRelationManager;
use App\Filament\Widgets\EmployeeStatsOverview;
use App\Models\City;
use App\Models\District;
use App\Models\Employee;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Employee Management';

    public static function form(Form $form): Form
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
                            fn (callable $set) => $set('district_id', 'null')
                        ),
                    Select::make('district_id')
                        ->label('District')
                        ->options(function (callable $get) {
                            $city = City::find($get('city_id'));
                            if (!$city) {
                                return District::all()->pluck('name', 'id')->toArray();
                            }
                            return $city->districts->pluck('name', 'id')->toArray();
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
                ]),
                Fieldset::make()
                ->schema([
                    Select::make('user_id')
                        ->label('Assign User')
                        ->options(['No User']+User::all()->pluck('name', 'id')->toArray())
                        ->reactive(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
            EmployeeStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
