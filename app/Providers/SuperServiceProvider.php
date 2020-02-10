<?php

namespace App\Providers;

use App\Contracts\SuperContract;
use App\Components\SuperComponent;
use Illuminate\Support\ServiceProvider;

class SuperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SuperComponent::class, function () {
            $component = new SuperComponent('intelligence');
            $component->setProperty('WOW THIS IS PROPERTY');

            return $component;
        });

        $this->app->bind(SuperContract::class, function () {
            $component = new SuperComponent('intelligence');
            $component->setProperty('WOW THIS IS PROPERTY');

            return $component;
        });
    }
}
