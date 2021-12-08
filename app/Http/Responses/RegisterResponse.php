<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

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
                return redirect()->intended("/dashboard");
            }
        } else {
            return new JsonResponse('', 201);
        }
    }
}
