<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('user_id')) {
            DB::table('logs')->insert([
                'user_id' => null,
                'action' => 'UNAUTHORIZED',
                'description' => 'Unauthorized access',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->route('login');
        }

        return $next($request);
    }
}
