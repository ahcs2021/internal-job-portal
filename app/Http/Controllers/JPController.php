<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPUser;

class JPController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function registerUser(Request $request)
    {
        $user=new JobPUser();
        $user->name=$request->post('name');
        $user->email=$request->post('email');
        $user->password=$request->post('password');
        $user->user_type=$request->post('user_type');
        $user->save();
        return response($user, 200);

    }
}
