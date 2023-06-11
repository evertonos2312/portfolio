<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $breadcrumb = 'Experiências';
    protected static ?string $pluralModelLabel = 'Experiências';
    protected static ?string $modelLabel = 'experiência';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Experiências';

    protected static ?string $recordTitleAttribute = 'title';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('Tìtulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_at')->label('Início em')
                    ->required(),
                Forms\Components\DatePicker::make('finished_at')->label('Termino em')
                    ->nullable(),
                Forms\Components\Checkbox::make('current')->label('Atual?')->requiredWithout('finished_at'),
                Forms\Components\Textarea::make('description')->label('Descrição'),
                Forms\Components\FileUpload::make('logo')->label('Imagem')
                    ->required()->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->circular()->height(100)->label('Imagem'),
                Tables\Columns\TextColumn::make('title')->label('Nome')->sortable(),
                Tables\Columns\TextColumn::make('start_at')
                    ->date('d/m/Y')->label('Início')->sortable(),
                Tables\Columns\TextColumn::make('finished_at')
                    ->date('d/m/Y')->label('Fim')->sortable(),
                Tables\Columns\CheckboxColumn::make('current')->label('Atual?')->disabled(),
            ])->defaultSort('start_at', 'desc')
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
