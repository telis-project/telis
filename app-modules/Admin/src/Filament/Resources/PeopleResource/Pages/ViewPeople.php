<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\PeopleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Telis\Admin\Filament\Resources\PeopleResource;

final class ViewPeople extends ViewRecord
{
    protected static string $resource = PeopleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
