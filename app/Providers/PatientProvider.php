<?php

namespace App\Providers;

use App\Models\Administration;
use App\Services\Kelurahan\KelurahanService;
use App\Services\Kelurahan\KelurahanServiceImplement;
use Illuminate\Support\ServiceProvider;

class PatientProvider extends ServiceProvider
{
    public $singletons = [
        KelurahanService::class => KelurahanServiceImplement::class,
    ];

    public function provides()
    {
        return [
            KelurahanService::class,
        ];
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
