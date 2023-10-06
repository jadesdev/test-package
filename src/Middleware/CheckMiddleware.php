<?php

namespace Jayflashy\LicenseChecker\Middleware;

use Closure;

class CheckMiddleware
{
    public function handle($request, Closure $next)
    {
        // Log requests passing through middleware 
        $logFile = 'cronjob_log.txt';
        $data = [
            "date" => now(),
            "message" => "Request passed through middleware."
        ];
        $logMessage = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($logFile, $logMessage, FILE_APPEND);

        return $next($request);
    }
}