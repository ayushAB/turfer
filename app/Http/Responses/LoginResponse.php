<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if (!$request->wantsJson()) {
            if ($request->user()->role === "owner") {
                return redirect()->intended("/admin/admin-dashboard");
            } else {
                return redirect()->intended(config('fortify.home'));
            }
        } else {
            return response()->json(['two_factor' => false]);
        }
    }
}
