<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\TeamResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Telis\Admin\Filament\Resources\TeamResource;

final class ViewTeam extends ViewRecord
{
    protected static string $resource = TeamResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
