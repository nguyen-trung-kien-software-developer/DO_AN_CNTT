<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }

    protected function redirectTo($request)
    {

        $params = [
            'id' => $request->route('id'),
            'hash' => $request->route('hash'),
            'expires' => $request->input('expires'),
            'signature' => $request->input('signature')
        ];

        if (!$request->expectsJson($request)) {
            return route('site.customer.verifyAccount', $params);
        }

        return route('site.home');
    }
}