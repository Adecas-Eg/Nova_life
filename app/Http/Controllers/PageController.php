<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */

     //metodo retorna pagina no encintrada
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function vr()
    {
        return view("pages.virtual-reality");
    }
    public function sobre()
    {
        return view("pages.sobre");
    }
    public function privacidad()
    {
        return view("pages.privacidad");
    }
    public function faq()
    {
        return view("pages.faq");
    }

    public function terminos()
    {
        return view("pages.terminos");
    }
    public function plans()
    {
        return view("pages.plans");
    }

    public function rtl()
    {
        return view("pages.rtl");
    }

    public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
