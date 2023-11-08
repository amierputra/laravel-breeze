<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display list of user.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.users.list', ['users' => $user]);
    }

    /**
     * Display user detail.
     */
    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }
}
