<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use App\Models\Feedback;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // protected $profile, $feedbacks;
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale('en');
        date_default_timezone_set('Asia/Jakarta');

        // $this->profile = Profile::first();
        // $this->feedbacks = Feedback::where('status', null)->orderBy('id', 'desc')->get();

        view()->composer('layouts.dashboard.master', function ($view) {
            $view->with(
                ['feedbacks' => Feedback::where('status', null)->orderBy('id', 'desc')->get()],
            );
        });

        view()->composer('layouts.visitor.master', function ($view) {
            $view->with(
                ['profile' => Profile::first()],
            );
        });

        Gate::define('superadmin', function (User $user) {
            return $user->username == 'superadmin';
        });

        Gate::define('admin', function (User $user) {
            return $user->username == 'admin';
        });
    }
}
