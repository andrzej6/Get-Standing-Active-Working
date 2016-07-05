<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider as ServiceProvider;
use App\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* articles for prefooter */
        $featured_art = Article::where('country', 'LIKE', '1%')->where('featured', 'LIKE','1%')->orderby('date_posted', 'desc')->take(2)->get();
        view()->share('featured_art', $featured_art);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
