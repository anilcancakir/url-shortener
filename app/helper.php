<?php

if (!function_exists('isRoute')) {
    /**
     * Is current route for active
     *
     * @param string|array $routes
     * @param string $returnString
     * @return string
     */
    function isRoute($routes, $returnString = 'is-active') {
        if (!is_array($routes)) {
            $routes = [$routes];
        }

        $currentRoute = request()->route()->getName();
        return in_array($currentRoute, $routes) ? $returnString : '';
    }
}

if (!function_exists('isRouteGroup')) {
    /**
     * Is current route in group for active
     *
     * @param string $prefix
     * @param string $returnString
     * @return string
     */
    function isRouteGroup($prefix, $returnString = 'is-active') {
        $currentRoute = request()->route()->getName();
        return preg_match('/' . $prefix . '\./', $currentRoute) ? $returnString : '';
    }
}

if (!function_exists('decode')) {
    function decode($key) {
        return \App\Math::to_base_10($key, 62) - 10;
    }
}

if (!function_exists('encode')) {
    function encode($id) {
        return \App\Math::to_base(($id + 10), 62);
    }
}