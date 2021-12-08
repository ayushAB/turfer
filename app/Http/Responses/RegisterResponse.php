<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use Laravel\Fortify\Fortify;

class RegisterResponse implements RegisterResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {

        if (!$request->wantsJson()) {
            if ($request->user()->role === "owner") {
                return redirect()->intended("/admin/dashboard");
            } else {
                return redirect()->intended(Fortify::redirects('register'));
            }
        } else {
            return new JsonResponse('', 201);
        }
    }
}