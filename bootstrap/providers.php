<?php

declare(strict_types=1);

return [
    App\Providers\AppServiceProvider::class,
    Telis\Admin\AdminPanelProvider::class,
    App\Providers\Filament\AppPanelProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\HorizonServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    App\Providers\MacroServiceProvider::class,
    Telis\Documentation\DocumentationServiceProvider::class,
];
