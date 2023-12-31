<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {

        //redirecciona para la ruta principal acomodar la ruta princiapla
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = auth()->user();

            //recuperara los roles y redireccionar a cada ruta
            if (auth()->user()->status == 1) {
                foreach ($user->roles as $role) {
                    if ($role->name == "admin") {
                        return redirect()->intended('dashboard');

                    } else {
                        return redirect()->intended('casa');
                    }
                }
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Usuerio inactivo',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'Credenciales incorctas',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
