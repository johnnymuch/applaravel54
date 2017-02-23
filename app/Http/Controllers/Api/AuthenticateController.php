<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthenticateController extends ApiController
{
    use AuthenticatesUsers,ValidatesRequests;

    public function login(Request $request)
    {        
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->credentials($request);

        if ($this->guard()->attempt($credentials, $request->has('remember'))) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if (! $lockedOut) {
            $this->incrementLoginAttempts($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendLoginResponse(Request $request)
    {               

        $this->clearLoginAttempts($request);
        $this->setApiKey();
        return $this->respond([
           'data'=>$this->guard()->user() 
        ]);
    }

    /**
     * Get the failed login response instance.
     * @overide
     */
    protected function sendFailedLoginResponse()
    {
        return $this->respondUnathourize();
    }    

    private function setApiKey()
    {
        $user = $this->guard()->user();
        $user->api_token = sha1(date("Y-m-d H:i:s").$user->name);
        $user->save();
    }
}
