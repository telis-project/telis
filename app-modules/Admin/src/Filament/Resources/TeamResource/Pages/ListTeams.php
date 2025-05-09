<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\TeamResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Telis\Admin\Filament\Resources\TeamResource;

final class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
