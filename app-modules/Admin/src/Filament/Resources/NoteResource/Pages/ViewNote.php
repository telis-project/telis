<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\NoteResource\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Override;
use Telis\Admin\Filament\Resources\NoteResource;

final class ViewNote extends ViewRecord
{
    protected static string $resource = NoteResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
