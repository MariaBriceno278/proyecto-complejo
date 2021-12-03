<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            \App\Charts\SampleChart::class
        ]);

        $charts->register([
            \App\Charts\Asignaciones::class
        ]);

        $charts->register([
            \App\Charts\MitadAnual::class
        ]);

        $charts->register([
            \App\Charts\MitadAnual2::class
        ]);

        $charts->register([
            \App\Charts\Ed1::class
        ]);
    }


}
