<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\PeopleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Telis\Admin\Filament\Resources\PeopleResource;

final class ListPeople extends ListRecords
{
    protected static string $resource = PeopleResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
