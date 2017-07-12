<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\InfoAlumno;

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
    public function index()
    {
        $user = \Auth::user();

        if ($user->hasRole('director')) {
          return view('director/home');
        }

        if ($user->hasRole('inspector')) {
          return view('inspector/home');
        }

        if ($user->hasRole('alumno')) {
          return view('alumno/home');
        }

        if ($user->hasRole('secretaria')) {
          return view('secretaria/home');
        }
    }
}
