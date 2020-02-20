<?php

namespace App\Http\Controllers;
use Model\User;
use \Input;
use \View;
use \Validator;
use \Redirect;
use \Auth;
use App\Aktivitas;
use \Session;
use DB;
use App\Charts\HomeChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('layouts.home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function logout(){
        Auth::logout();
        return redirect('/'); // ini untuk redirect setelah logout
    }
}
