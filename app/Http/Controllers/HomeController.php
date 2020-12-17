<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $request->user()->authorizeRoles(['user', 'admin']);

        if (Auth::user()->hasRole('admin')) {
            $usuarios=User::orderBy('id','ASC')->paginate(5);
            return view('home',compact('usuarios'));
        }else{
            return view('aprov.frmProv');
        }
              
    }
}
