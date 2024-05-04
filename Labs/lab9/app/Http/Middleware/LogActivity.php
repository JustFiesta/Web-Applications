<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        // Log general activity to stderr channel
        Log::channel('stderr')->notice(
            "Someone did {$request->method()} on '{$request->route()->uri()}'"
        );

        // Determine user email or mark as anonymous if not authenticated
        $email = $request->user() ? $request->user()->email : 'anonymous';

        // Log detailed activity to laravel.log file
        Log::channel('single')->notice(
            "'{$email}' did {$request->method()} on '{$request->getRequestUri()}'"
        );

        return $next($request);
    }
}
