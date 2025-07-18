<?php

declare(strict_types=1);

return [
    App\Providers\MacroServiceProvider::class,
    App\Providers\AppServiceProvider::class,
    Telis\Admin\AdminPanelProvider::class,
    App\Providers\Filament\AppPanelProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\HorizonServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    Telis\Documentation\DocumentationServiceProvider::class,
];
