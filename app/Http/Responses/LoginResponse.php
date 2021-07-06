<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $home = ( auth()->user()->role->first() == 'student' ) ? '/dashboard' :'/home' ;

        return redirect()->intended($home);
    }
}
