<?php

if (!function_exists('isActiveRoute')) {
    function isActiveRoute($route, $output = "active")
    {
        return app('active-route')->isActiveRoute($route, $output);
    }
}

if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(Array $routes, $output = "active")
    {
        return app('active-route')->areActiveRoutes($routes, $output);
    }
}

if (!function_exists('isActiveUrl')) {
    function isActiveUrl($route, $output = "active")
    {
        return app('active-route')->isActiveUrl($route, $output);
    }
}

