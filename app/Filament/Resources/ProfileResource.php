<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $breadcrumb = 'Sobre mim';
    protected static ?string $pluralModelLabel = 'Sobre mim';
    protected static ?string $modelLabel = 'sobre mim';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)->label('Nome'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('secondary_email')
                    ->email()
                    ->maxLength(255)->label('Email secundário'),
                Forms\Components\TextInput::make('linkedin_url')->url()
                    ->maxLength(255)->label('Linkedin'),
                Forms\Components\TextInput::make('github_url')
                    ->maxLength(255)->url()->label('Github'),
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
                Tables\Columns\TextColumn::make('name')->label('Nome'),
                Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
