<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\CompanyResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Telis\Admin\Filament\Resources\CompanyResource;

final class ViewCompany extends ViewRecord
{
    protected static string $resource = CompanyResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
