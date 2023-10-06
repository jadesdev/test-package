<?php
namespace Jayflashy\LicenseChecker;

class RequestLogger
{
    public function log($request)
    {
        $logFile = ('requests_log.txt');
        $data = [
            "date" => now(),
            "message" => "Request passed through middleware.",
            "method" => $request->method() ,
            "url" => $request->url()
        ];
        $logMessage = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($logFile, $logMessage, FILE_APPEND);


    }
}