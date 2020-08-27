<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //view the users table
    public function viewUsers()
    {
        return view('Admin-Side.users.view-users');
    }
}
