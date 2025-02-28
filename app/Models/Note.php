<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Telis\CustomFields\Models\Concerns\UsesCustomFields;
use Telis\CustomFields\Models\Contracts\HasCustomFields;

final class Note extends Model implements HasCustomFields
{
    use HasFactory;
    use UsesCustomFields;

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(People::class);
    }
}
