<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieTagsInput;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $breadcrumb = 'Projetos';
    protected static ?string $pluralModelLabel = 'Projetos';
    protected static ?string $modelLabel = 'projeto';


    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Projetos';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Tìtulo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Checkbox::make('visible')->label('Visível?')->default(true),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                SpatieTagsInput::make('skills')->label('Tecnologias utilizadas'),
                Forms\Components\DatePicker::make('finished_at')->label('Terminado em')
                    ->required(),
                Forms\Components\FileUpload::make('image')->label('Imagem')
                    ->required()->image(),

                Forms\Components\RichEditor::make('description')->label('Descrição') ->disableToolbarButtons([
                    'attachFiles',
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->circular()->height(100)->label('Imagem'),
                Tables\Columns\TextColumn::make('name')->label('Nome')->sortable(),
                Tables\Columns\TextColumn::make('finished_at')
                    ->date('d/m/Y')->label('Terminado em')->sortable(),
                Tables\Columns\CheckboxColumn::make('visible')->label('Visível?'),
            ])->defaultSort('finished_at', 'desc')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
