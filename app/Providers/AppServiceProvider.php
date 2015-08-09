<?php

namespace App\Providers;

use Blade;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('break', function($expression) {
            return "<?php break; ?>";
        });

        Blade::directive('continue', function($expression) {
            return "<?php continue; ?>";
        });

        Carbon::setLocale(config('app.locale'));
        setlocale(LC_TIME, config('app.locale') . '.UTF-8');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
