<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all();

        return view("admin.home", compact("users"));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/home')->with('success', 'Vous avez supprimé un utilisateur.');
    }
}