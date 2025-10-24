<?php

namespace Boy132\Snowflakes;

use Filament\Contracts\Plugin;
use Filament\Panel;

class SnowflakesPlugin implements Plugin
{
    public function getId(): string
    {
        return 'snowflakes';
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void {}
}
