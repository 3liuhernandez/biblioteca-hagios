<?php


/* use \App\Http\Controllers\Illuminate\Http\Request;
use \App\Http\Controllers\Illuminate\Support\Facades\Auth; */

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

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

    /* protected $redirectToAdmin = RouteServiceProvider::ADMIN; */
    /* protected $redirectToUser = RouteServiceProvider::HOME; */

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $role = '';
        $url = '';
        $role = $user->role;

        switch ($role) {
            case '0':
                $url = '/admin/';
                break;
            case '1':
                $url = '/home';
                break;
            default:
                $url = '/home';
                break;
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended($url);
        }
    }
}
