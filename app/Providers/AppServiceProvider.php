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
            $view->with('companyPhone', $company->phone);
            $view->with('companyWeekDay', $company->weekday);
            $view->with('companySaturday', $company->saturday);
            $view->with('companySunday', $company->sunday);
            $view->with('companyEmail', $company->email);
            $view->with('companyAddress', $company->address);
            $view->with('companyWpContant', $company->wp_contant);
            $view->with('companInstagram', $company->instagram);
            $view->with('companyFacebook', $company->youtube);
            $view->with('companyX', $company->x);
            $view->with('companyAppStore', $company->app_store);
            $view->with('companyPlayStore', $company->play_store);
        });
    }
}
