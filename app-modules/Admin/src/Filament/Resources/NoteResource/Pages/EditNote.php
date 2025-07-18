<?php

declare(strict_types=1);

namespace Telis\Admin\Filament\Resources\NoteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Telis\Admin\Filament\Resources\NoteResource;

final class EditNote extends EditRecord
{
    protected static string $resource = NoteResource::class;

    #[\Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
