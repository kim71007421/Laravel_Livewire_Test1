<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UsersModel;

class RegisterController extends Controller
{
    public function register()
	{
		return view('register');
	}
	
	public function user()
	{
		return view('user')->with('users', UsersModel::all());
	}
}
