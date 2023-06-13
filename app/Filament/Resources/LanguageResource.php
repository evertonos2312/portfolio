<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageResource\Pages;
use App\Filament\Resources\LanguageResource\RelationManagers;
use App\Models\Language;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Yepsua\Filament\Forms\Components\RangeSlider;

class LanguageResource extends Resource
{
    protected static ?string $model = Language::class;

    protected static ?string $navigationIcon = 'heroicon-o-desktop-computer';
    protected static ?string $navigationLabel = 'Linguagens';
    protected static ?string $breadcrumb = 'Linguagens';
    protected static ?string $pluralModelLabel = 'Linguagens';
    protected static ?string $modelLabel = 'linguagen';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('percent')
                    ->required()->numeric()->integer()->rules(['min:0', 'max:100']),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Linguagem'),
                Tables\Columns\TextColumn::make('percent')->label('Porcentagem'),
                Tables\Columns\TextColumn::make('created_at')->label('Criado em')
                    ->dateTime('d/m/Y H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLanguages::route('/'),
            'create' => Pages\CreateLanguage::route('/create'),
            'edit' => Pages\EditLanguage::route('/{record}/edit'),
        ];
    }
}
