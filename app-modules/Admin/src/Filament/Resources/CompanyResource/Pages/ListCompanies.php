<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\CompanyResource\Pages;

use Override;
use Filament\Actions\CreateAction;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Telis\Admin\Filament\Resources\CompanyResource;

final class ListCompanies extends ListRecords
{
    protected static string $resource = CompanyResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
