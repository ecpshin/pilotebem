<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegiaoResource\Pages;
use App\Filament\Resources\RegiaoResource\RelationManagers;
use App\Models\Regiao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegiaoResource extends Resource
{
    protected static ?string $model = Regiao::class;

    protected static ?string $modelLabel = 'Região';

    protected static ?string $pluralModelLabel = 'Regiões';

    protected static ?string $navigationGroup = 'Projeto';

    protected static ?string $navigationIcon = 'icon-map-o';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                RegiaoResource::getFormSchema()
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('municipio')->label('Município'),
                Tables\Columns\TextColumn::make('regiao')->label('Município'),
                Tables\Columns\TextColumn::make('uf')->label('Município'),
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
            'index' => Pages\ListRegiaos::route('/'),
            'create' => Pages\CreateRegiao::route('/create'),
            'edit' => Pages\EditRegiao::route('/{record}/edit'),
        ];
    }

    protected static function getFormSchema(): array
    {

        return [
            Forms\Components\Section::make('Informações da Região')->schema([
                Forms\Components\Group::make([

                    Forms\Components\TextInput::make('municipio'),

                    Forms\Components\TextInput::make('regiao'),

                    Forms\Components\TextInput::make('uf'),

                ])->columns(['lg' => 2]),

                Forms\Components\Toggle::make('ativo')->default(false),
            ])
        ];
    }
}
