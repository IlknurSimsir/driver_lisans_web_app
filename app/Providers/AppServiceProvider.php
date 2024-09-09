<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\OrganisationModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            // Veritabanından şirket verilerini çek
            $company = OrganisationModel::first(); // Tabloda sadece bir satır varsa bu yeterlidir

            $view->with('companyName', $company->name);
            $view->with('companyLogo', $company->logo);
        });
    }
}
