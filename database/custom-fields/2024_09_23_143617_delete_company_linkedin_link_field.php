<?php

use App\Models\Company;
use Telis\CustomFields\Migrations\CustomFieldsMigration;

return new class extends CustomFieldsMigration
{
    public function up(): void
    {
        $this->migrator->find(Company::class, 'linkedin')->delete();
    }
};
