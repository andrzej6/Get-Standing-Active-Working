<?php namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;

class sitemap {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !$request->is("sitemap") && $request->fullUrl() != '' && $this->auth->guest() )
        {
            $aSiteMap = \Cache::get('sitemap', []);
            $changefreq = 'always';
            if ( !empty( $aSiteMap[$request->fullUrl()]['added'] ) ) {
                $changefreq = 'monthly';
            }
            $aSiteMap[$request->fullUrl()] = [
                'added' => time(),
                'lastmod' => Carbon::now()->toDateString(),
                'priority' => 1 - substr_count($request->getPathInfo(), '/') / 10,
                'changefreq' => $changefreq
            ];
            \Cache::put('sitemap', $aSiteMap, 2880);
        }
        return $next($request);
    }
}