<?php

namespace App\Http\Controllers;

use App\AdminPanel;
use App\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    //register user
    public function register()
    {
        //show the register page\
        return view('Admin-Side.admin-register');
    }

    //create new user account

    public function createAccount(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $InsertData = new User;
            $InsertData->name = $data['name'];
            $InsertData->email = $data['email'];
            $InsertData->password = md5($data['pass']);
            $InsertData->save();

            return redirect('/admin')->with("success", " Welcome " . $data['name'] . " you can Enter the page  ");
        } else {
            return redirect()->with("error", " Sorry  you can not Enter the page  ");
        }
    }

    // login user
    public function login(Request $request)
    {
        //show the login page and enter after registeration
        if ($request->isMethod("post")) {
            $data = $request->input();

            $getInfo = User::where(["email" => $data['email'], 'password' => $data['pass']])->count();

            if ($getInfo > 0) {
                return view('Admin-Side.dashboard');
            } else {
                return redirect('/admin')->with("error", " you have a problem please fix it ");
            }
        }
        return view('Admin-Side.admin-login');
    }

    public function dashboard()
    {
        return view('Admin-Side.dashboard');
    }
}
