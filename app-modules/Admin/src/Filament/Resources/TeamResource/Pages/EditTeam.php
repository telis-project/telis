<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\TeamResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Telis\Admin\Filament\Resources\TeamResource;

final class EditTeam extends EditRecord
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
