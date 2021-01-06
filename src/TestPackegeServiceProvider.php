<?php

namespace Proform\TestPackege;

use Illuminate\Support\ServiceProvider;
use Proform\TestPackege\Commands\TestPackegeCommand;

class TestPackegeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/test-packege.php' => config_path('test-packege.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/test-packege'),
            ], 'views');

            $migrationFileName = 'create_test_packege_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                TestPackegeCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'test-packege');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/test-packege.php', 'test-packege');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
