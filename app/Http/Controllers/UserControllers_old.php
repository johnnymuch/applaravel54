<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;

class UserController extends Controller
{
    //select function user
    public function index()
    {
    	$users = user::all();
    	return view('auth.index',['users' => $users]);
    }

    // select function role
    public function role()
    {
    	// echo "Hello World!";
    	$roles = role::all();
    	return view('auth.role',['roles'=>$roles]);
    }

    // selection permission function 
    public function permission()
    {
    	$permissions = permission::all();
    	return view('auth.permission',['permissions'=>$permissions]);
    }
}


		