<?php

namespace lp\surveys;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class SurveysServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->make('lp\surveys\Controllers\SurveysController');
        $this->loadViewsFrom(__DIR__ . '/view','surveys');


    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->publishes(
            [__DIR__ . '/views' => base_path('resources/views/vendor/lp')],
            'views'
        );
        $this->publishes([
            __DIR__.'/View/css' => public_path('vendor/lp/surveys'),
        ], 'lp-surveys-assets');

        $this->loadMigrationsFrom('vendor/lp/surveys/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'lp\surveys');

        Log::info('ServiceProvider booting...');
        $this->app->bind('lp\surveys\Models\Survey', function ($app, $id) {
            Log::info('Model binding for id: ' . implode(',', $id));
            return \LP\surveys\Models\Survey::find($id);
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                'vendor/lp/surveys/database/migrations' => database_path('migrations'),
            ], 'migrations');
        }

        $this->publishes([
            'vendor/lp/surveys/src/resources/lang' => resource_path('lang'),
        ], 'translations');

        /*
        $this->publishes([
            'vendor/lp/surveys/src/View/css' => resource_path('css'),
        ], 'color');
        */
    }
}
