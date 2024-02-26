<?php

namespace Holoultek\Capabilities;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

class CastsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        AboutCommand::add('Laravel Casts', fn () => ['Version' => '0.0.1', 'Author' => 'ghiath-dev']);
    }
}
