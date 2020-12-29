<?php

namespace Io238\LaravelOwnership;

use Illuminate\Support\ServiceProvider;


class LaravelOwnershipServiceProvider extends ServiceProvider {

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-ownership.php' => config_path('laravel-ownership.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-ownership'),
            ], 'views');

            $migrationFileName = 'create_laravel_ownership_table.php';
            if ( ! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }
        }

    }


    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-ownership.php', 'laravel-ownership');
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
