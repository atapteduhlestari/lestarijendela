<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale('en');
        date_default_timezone_set('Asia/Jakarta');

        View::share('profile', Profile::first());

        // view()->composer('layouts.visitor.master', function ($view) {
        //     $view->with(
        //         ['profile' => Profile::first()],
        //     );
        // });

        Gate::define('superadmin', function (User $user) {
            return $user->username == 'superadmin';
        });

        Gate::define('admin', function (User $user) {
            return $user->username == 'admin';
        });
    }
}
