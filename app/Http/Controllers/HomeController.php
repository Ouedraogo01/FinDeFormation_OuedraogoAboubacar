<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotele;
use App\Ville;

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
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view('welcome', compact("hoteles", "villes"));
    }

}