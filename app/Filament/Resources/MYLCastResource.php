<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MYLCastResource\Pages;
use App\Filament\Resources\MYLCastResource\RelationManagers;
use App\Models\MYLCast;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MYLCastResource extends Resource
{
    protected static ?string $model = MYLCast::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('character')
                ->required()
                ->maxLength(255),      
                Forms\Components\TextInput::make('person_in_sitcom')
                ->required()
                ->maxLength(255), 
                Forms\Components\TextInput::make('catchphrases')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('career')
                ->required()
                ->maxLength(255), 
                Forms\Components\DatePicker::make('date_of_birth')
                ->required()
                ->maxDate(now()),
                Forms\Components\DatePicker::make('date_when_died')
                ->maxDate(now()),
                Forms\Components\Textarea::make('description')
                ->maxLength(6553535)
                ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('name'),
                    Tables\Columns\TextColumn::make('character'),
                    Tables\Columns\TextColumn::make('person_in_sitcom'),
                    Tables\Columns\TextColumn::make('catchphrases'),
                    Tables\Columns\TextColumn::make('career'),
                    Tables\Columns\TextColumn::make('date_of_birth'),
                    Tables\Columns\TextColumn::make('date_when_died'),
                    Tables\Columns\TextColumn::make('description'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMYLCasts::route('/'),
            'create' => Pages\CreateMYLCast::route('/create'),
            'edit' => Pages\EditMYLCast::route('/{record}/edit'),
        ];
    }
}
