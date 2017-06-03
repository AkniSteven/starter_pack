<?php

namespace App\Http\Middleware;

use Closure;

class Seo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uri = $request->getRequestUri();
        $seoUri = strtolower($uri);

        if ($uri != $seoUri) {
            return redirect($seoUri, 301);
        }
        return $next($request);
    }
}
