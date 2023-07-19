<?php

namespace App\Providers;

use App\Repositories\Kelurahan\KelurahanRepository;
use App\Repositories\Kelurahan\KelurahanRepositoryImplement;
use App\Repositories\Patient\PatientRepository;
use App\Repositories\Patient\PatientRepositoryImplement;
use App\Services\Kelurahan\KelurahanService;
use App\Services\Kelurahan\KelurahanServiceImplement;
use App\Services\Patient\PatientService;
use App\Services\Patient\PatientServiceImplement;
use Illuminate\Support\ServiceProvider;

class PatientProvider extends ServiceProvider
{
    public $singletons = [
        KelurahanRepository::class => KelurahanRepositoryImplement::class,
        KelurahanService::class => KelurahanServiceImplement::class,
        PatientRepository::class => PatientRepositoryImplement::class,
        PatientService::class => PatientServiceImplement::class
    ];

    public function provides()
    {
        return [
            KelurahanRepository::class, KelurahanService::class,
            PatientService::class, PatientServiceImplement::class
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
