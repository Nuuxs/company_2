<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorCounter
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $browser = $request->header('User-Agent');
        $date = now()->toDateString();
        $time = now()->toTimeString();

        DB::table('visitors')->insert([
            'ip_address' => $ip,
            'browser' => $browser,
            'visit_date' => $date,
            'visit_time' => $time,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $next($request);
    }
}
