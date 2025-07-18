<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Telis\Admin\Filament\Resources\UserResource;

final class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
