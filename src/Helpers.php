<?php


function percentageIncrease($percentage, $number) {
    $increase = ($percentage / 100) * $number;
    $newValue = $number + $increase;
    return $newValue;
}
if (!function_exists('service_type_format')) {
    function service_type_format($type)
    {
        $type = strtolower(str_replace(" ", "_", $type));
        return $type;
    }
}

if (!function_exists('static_asset')) {
    function static_asset($path, $secure = null)
    {
        return app('url')->asset('public/assets/' . $path, $secure);
    }
}
//return file uploaded via uploader
if (!function_exists('my_asset')) {
    function my_asset($path, $secure = null)
    {
        return app('url')->asset('public/uploads/' . $path, $secure);
    }
}