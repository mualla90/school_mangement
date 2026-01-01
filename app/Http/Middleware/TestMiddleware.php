<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $name): Response
    {
        if($name='hassan'){
            return $next($request);

        }
        else{
            return response()->json([
                'data'=>[],
                'message'=>'error',
            ]);
        }
    }
    public function terminate(){
        Log::info('hello');
    }
}
