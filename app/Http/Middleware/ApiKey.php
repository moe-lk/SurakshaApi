<?php

namespace App\Http\Middleware;

use Closure;

class ApiKey
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
        $api_key = $request->header('API_KEY');

        if(!$api_key || $api_key != env('API_KEY')) {
            return response('API KEY NOT FOUND', 401)->header('Content-Type', 'application/json');
        }

        return $next($request);
    }
}
