<?php

namespace App\Http\Controllers;

use App\Models\Casa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return redirect()->route('casa.index');
    }

    public function dashboard()
    {
        $a = Casa::get()->count();
        $t = User::get()->count();
        $un = User::get()->where('created_at', '>', Carbon::today()->subMonth(7))->count();
        $promu = round(((($t+$un-$t)/$t)*100),2);
        return view('pages.dashboard', compact('a', 't', 'un','promu'));
    }

    public function princ()
    {
        return view('home');
    }
}
