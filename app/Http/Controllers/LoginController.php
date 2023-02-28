<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->intended('home');
//            return view('/');
        } else {
            return view('users.auth.view_login');
        }

    }

    public function proses(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong',
        ]);

        $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user) {
                return redirect()->intended('absen');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => "Username atau password salah"
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Show the application's registration form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function register()
    {
        return view('users.auth.view_register');
    }

//    /**
//     * Handle a registration request for the application.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
//     */
//    public function postRegister(Request $request)
//    {
//        // validate the user's registration input
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|string|email|unique:users,email',
//            'name' => 'required|string|max:255',
//            'username' => 'required|string|max:255|unique:users,username',
//            'class' => 'required|string|max:255',
//            'password' => 'required|string|confirmed|min:8',
//        ]);
//
//        // check if the validation failed
//        if ($validator->fails()) {
//            return redirect('register')
//                ->withErrors($validator)
//                ->withInput();
//        }
//
//        // create the user in the database
//        $user = new User();
//        $user->email = $request->input('email');
//        $user->name = $request->input('name');
//        $user->username = $request->input('username');
//        $user->class = $request->input('class');
//        $user->password = bcrypt($request->input('password'));
//        $user->save();
//
//        // authenticate the user and redirect to the homepage
//        Auth::login($user);
//        return redirect('home');
//    }
}
