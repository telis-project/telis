<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources;

use App\Enums\CreationSource;
use App\Models\People;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Telis\Admin\Filament\Resources\PeopleResource\Pages;

final class PeopleResource extends Resource
{
    protected static ?string $model = People::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'CRM';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Person';

    protected static ?string $pluralModelLabel = 'People';

    public static function getNavigationBadge(): ?string
    {
        return self::getModel()::count() > 0 ? (string) self::getModel()::count() : null;
    }

    protected static ?string $slug = 'people';

    #[\Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('team_id')
                    ->relationship('team', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('creation_source')
                    ->options(CreationSource::class)
                    ->default(CreationSource::WEB),
            ]);
    }

    #[\Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('team.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('creation_source')
                    ->badge()
                    ->color(fn (CreationSource $state): string => match ($state) {
                        CreationSource::WEB => 'info',
                        CreationSource::SYSTEM => 'warning',
                        CreationSource::IMPORT => 'success',
                    })
                    ->label('Source')
                    ->toggleable(),
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
                SelectFilter::make('creation_source')
                    ->label('Creation Source')
                    ->options(CreationSource::class)
                    ->multiple(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    #[\Override]
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePeople::route('/create'),
            'view' => Pages\ViewPeople::route('/{record}'),
            'edit' => Pages\EditPeople::route('/{record}/edit'),
        ];
    }
}
