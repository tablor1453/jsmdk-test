<?php

namespace App\Providers;

use App\Repositories\Kelurahan\KelurahanRepository;
use App\Repositories\Kelurahan\KelurahanRepositoryImplement;
use App\Services\Kelurahan\KelurahanService;
use App\Services\Kelurahan\KelurahanServiceImplement;
use Illuminate\Support\ServiceProvider;

class PatientProvider extends ServiceProvider
{
    public $singletons = [
        KelurahanRepository::class => KelurahanRepositoryImplement::class,
        KelurahanService::class => KelurahanServiceImplement::class,
    ];

    public function provides()
    {
        return [
            KelurahanRepository::class,
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
