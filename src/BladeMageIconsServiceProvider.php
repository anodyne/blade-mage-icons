<?php

declare(strict_types=1);

namespace Anodyne\MageIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeMageIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-mage-icons', []);

            $factory->add('mage-icons', array_merge([
                'path' => __DIR__.'/../resources/svg',
                'prefix' => 'mage',
            ], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-mage-icons.php', 'blade-mage-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mage-icons'),
            ], 'blade-mage-icons');

            $this->publishes([
                __DIR__.'/../config/blade-mage-icons.php' => $this->app->configPath('blade-mage-icons.php'),
            ], 'blade-mage-icons-config');
        }
    }
}
