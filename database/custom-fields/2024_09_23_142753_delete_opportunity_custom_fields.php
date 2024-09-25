<?php

use App\Models\Opportunity;
use Telis\CustomFields\Migrations\CustomFieldsMigration;

return new class extends CustomFieldsMigration
{
    public function up(): void
    {
        $this->migrator->find(Opportunity::class, 'stage')->delete();
    }
};
