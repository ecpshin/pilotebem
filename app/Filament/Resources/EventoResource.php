<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventoResource\Pages;
use App\Filament\Resources\EventoResource\RelationManagers;
use App\Models\Evento;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventoResource extends Resource
{
    protected static ?string $model = Evento::class;
    protected static ?string $navigationGroup = 'Projeto';
    protected static ?string $navigationIcon = 'icon-calendar-event';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                EventoResource::getFormSchema()
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('regiao.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nome_evento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('data_evento')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('ativo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListEventos::route('/'),
            'create' => Pages\CreateEvento::route('/create'),
            'edit' => Pages\EditEvento::route('/{record}/edit'),
        ];
    }

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make('Informações do Evento')->schema([
                Forms\Components\Select::make('regiao_id')
                    ->relationship('regioes', 'municipio')
                    ->searchable()
                    ->preload()
                    ->required(fn(string $operation): bool => $operation === 'create')
                    ->columnSpanFull(),
                Forms\Components\Select::make('modulo_id')
                    ->relationship('modulos', 'nome')
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->required(fn(string $operation): bool => $operation === 'create')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('nome_evento')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('data_evento'),
                Forms\Components\FileUpload::make('banner_path')
                    ->label('Banner')
                    ->image()
                    ->imageEditor()
                    ->openable()
                    ->directory('eventos/banners')
                    ->panelLayout('grid')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('ativo'),

            ])->columns(['xl' => 2]),
        ];
    }
}
