<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Telis\Admin\Filament\Resources\UserResource;

final class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
