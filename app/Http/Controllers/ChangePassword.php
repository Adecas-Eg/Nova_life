<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChangePassword extends Controller
{

    // protected $user;

    // public function __construct()
    // {
    //     Auth::logout();

    //     $id = intval(request()->id);
    //     $this->user = User::find($id);
    // }

    public function show(User $userNew)
    {
        return view('auth.change-password', compact('userNew'));
    }
    public function show_password()
    {
        return view('auth.passwords.change_password');
    }


    public function update(Request $request, User $userNew)
    {
        $userNew->password = $request->password;
        $userNew->status = 1;
        $userNew->save();
        Auth::login($userNew);
        return redirect()->route('casa.index');
    }
    public function update_password(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:5'],
            'confirm-password' => ['same:password']
        ]);

        $existingUser = User::where('email', $attributes['email'])->first();
        if ($existingUser) {
            $existingUser->update([
                'password' => $attributes['password']
            ]);
            return redirect('login');
        } else {
            return back()->with('error', 'Your email does not match the email who requested the password change');
        }
    }
}
