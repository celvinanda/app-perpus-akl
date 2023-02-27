<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{

    public function index(): Factory|View|Application
    {
        $user = Auth::user();
        return view('layout.home')->with([
            'user' => $user,
        ]);
    }

    public function allUsers(): Factory|View|Application
    {
        $userControl = new UsersController();
        $users = $userControl->allUser();
        return view('layout.all_user', compact(['users']))->with([
            'user' => Auth::user(),
        ]);
    }
}
