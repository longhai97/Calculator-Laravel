<?php


namespace App\Http\Middleware;


use Illuminate\Http\Request;

class FooBarMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->input('foo') === 'bar') {
            return $next($request);
        }

        return \response()->json([
            'message' => 'foo must be bar'
        ]);
    }
}
