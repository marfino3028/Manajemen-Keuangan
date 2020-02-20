<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
Use Password;
Use Auth;
class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    public function showResetForm(Request $request, $token = null)
    {
        return view('reset')->with(
            ['token' => $token]
        );
    }
    public function broker(){
        return Password::broker('users');
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'password' => 'required|confirmed|min:8',
        ];
    }
    

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/login';
}
