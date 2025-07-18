<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\OpportunityResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Telis\Admin\Filament\Resources\OpportunityResource;

final class EditOpportunity extends EditRecord
{
    protected static string $resource = OpportunityResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
