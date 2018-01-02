<?php

namespace App\Providers;

use App\Model\Notes;
use App\Model\Penjualan;
use App\Observer\NotesObserver;
use App\Observer\PenjualanObserver;
use App\Services\BulanService;
use App\Services\HariService;
use App\Services\NotesService;
use App\Services\TahunService;
use App\Services\WaktuService;
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
        Penjualan::observe(PenjualanObserver::class);
        Notes::observe(NotesObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HariService', HariService::class);
        $this->app->bind('BulanService', BulanService::class);
        $this->app->bind('TahunService', TahunService::class);
        $this->app->bind('WaktuService', WaktuService::class);
        $this->app->bind('NotesService', NotesService::class);
    }
}
