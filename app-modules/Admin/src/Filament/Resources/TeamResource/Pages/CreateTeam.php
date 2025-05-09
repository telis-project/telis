<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\TeamResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Telis\Admin\Filament\Resources\TeamResource;

final class CreateTeam extends CreateRecord
{
    protected static string $resource = TeamResource::class;
}
