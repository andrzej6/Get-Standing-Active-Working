<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider as ServiceProvider;
use App\Article;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {


        switch ($request->server("HTTP_HOST")) {
            case 'getamericastanding.org':
                $featured_art = Article::where('country', 'LIKE', '%4%')->where('featured', 'LIKE', '%4%')->orderby('date_posted', 'desc')->take(2)->get();
                break;

            case 'getcanadastanding.org':
                $featured_art = Article::where('country', 'LIKE', '%3%')->where('featured', 'LIKE', '%3%')->orderby('date_posted', 'desc')->take(2)->get();
                break;

            case 'getaustraliastanding.org':
                $featured_art = Article::where('country', 'LIKE', '%2%')->where('featured', 'LIKE', '%2%')->orderby('date_posted', 'desc')->take(2)->get();
                break;

            default:
                $featured_art = Article::where('country', 'LIKE', '1%')->where('featured', 'LIKE', '1%')->orderby('date_posted', 'desc')->take(2)->get();
                break;
        }

        // articles for prefooter
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
