<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\PeopleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Telis\Admin\Filament\Resources\PeopleResource;

final class EditPeople extends EditRecord
{
    protected static string $resource = PeopleResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
