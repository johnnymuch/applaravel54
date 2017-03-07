<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use Hash;

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
	
	//function create & store	
	public function userCreate()
	{
		return view("auth.usercreate");
	}
	public function userStore(Request $request)
	{
		$this->validate($request, [
				'name' => 'required|unique:users',
				'email' => 'required|unique:users',
				'password' => 'required'
			]);
		$input = $request->all();
		$input['password'] = Hash::make($input['password']);
		User::create($input);
		return redirect('/auth')->with('status','Create New User Sucessfully');
	}
	// start role create
	public function roleCreate()
	{
		return view ('auth.rolecreate');
	}
	public function roleStore(Request $request)
	{
		$this->validate($request, [
				'name' => 'required|unique:roles',
				'display_name' => 'required|unique:roles',
				'description' => 'required'
			]);
		$input = $request->all();
		Role::create($input);
		return redirect('/auth/role')->with('sucess','Sucessfully');
	}
	//end role create
}
