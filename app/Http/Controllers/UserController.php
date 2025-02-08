<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Pass users to the 'users' Blade view
        return view('users', compact('users'));
    }
}
