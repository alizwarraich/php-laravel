<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create(){
        return view('admin.auth.login');
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());

    //     $request->authenticate($request);
    //     $request->session()->regenerate();
    //     return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    // }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
