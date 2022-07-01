<?php

namespace App\Providers;

use App\Models\Feedback;
use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $profile, $feedbacks; 
    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale('en');
        date_default_timezone_set('Asia/Jakarta');

        $this->profile = Profile::first();
        $this->feedbacks = Feedback::where('status', null)->get();
        
        view()->composer('layouts.dashboard.master', function ($view) {
            $view->with(
                ['feedbacks' => $this->feedbacks],
              
            );
        });

        view()->composer('layouts.visitor.master', function ($view) {
            $view->with(
                ['profile' => $this->profile],
              
            );
        });

        
    }
}
