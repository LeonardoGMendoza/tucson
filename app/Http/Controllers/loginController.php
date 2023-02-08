<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show()
    {
        return view('registro.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredencials();

        if (!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('registro.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

public function authenticated(request $request,$user){
    return redirect('/index');
}

}
