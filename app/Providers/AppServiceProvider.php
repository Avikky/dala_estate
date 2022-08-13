<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use View;
use App\Providers;
use App\Setting;
use App\Service;
use App\Housing;
use App\Faq;
use App\Property;
use App\Product;
use App\Loan;
use Auth;

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
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function($view)
        {

            

            $view->with('setting', Setting::find(1));
            // $view->with('allservices', Service::where('deleted_at', NULL)->get());
            $view->with('allservices', Service::where('deleted_at', NULL)->latest()->get());
            $view->with('housings', Property::whereHas('propertycategory', function ($query) {
                return $query->where('name', '=', 'Housing');
            })->get());
            // $view->with('properties', Property::with('propertycategory', 'propertyuses')->where('deleted_at', NULL)->get());
            $view->with('faqs', Faq::with('faqcat')->where('deleted_at', NULL)->get());
            // $view->with('allproducts', Product::where('deleted_at', NULL)->get());
            // $view->with('loancount', Loan::where('deleted_at', NULL)->where('status', 'Pending')->count());
            // $view->with('randproducts', Product::where('deleted_at', NULL)->inRandomOrder()->limit(4)->get());
        });
    }
}
