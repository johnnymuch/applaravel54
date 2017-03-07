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

	//start permission create
	public function permissionCreate()
	{
		return view('auth.permissioncreate');
	}
	public function permissionStore(Request $request)
	{
		$this->validate($request, [
				'name' => 'required|unique:permissions',
				'display_name' => 'required|unique:permissions',
				'description' => 'required'
			]);
		$input = $request->all();
		Permission::create($input);
		return redirect('/auth/permission')->with('sucess','Sucessfully');
	}
	//end persmission create

	public function permissionShow($id)
	{
		 $permissions = Permission::find($id);
        return view('auth.permissionshow',compact('permissions'));
	}

	public function permissionEdit($id)
	{
		$permissions = Permission::find($id);
        return view('auth.permissionupdate',compact('permissions'));
	}

	public function permissionUpdate(Request $request, $id)
	{
		$this->validate($request, [
				'name' => 'required|unique:permissions',
				'display_name' => 'required',
				'description' => 'required|unique:permissions'
			]);
		$input = $request->all();
		$permission = Permission::find($id);
		$permission->update($input);

		return redirect('auth/permission')->with('success','Permission update Sucessfully');
	}


	// update use
	public function userEdit($id)
	{
		$users = User::find($id);
        return view('auth.userupdate',compact('users'));
	}
	public function userUpdate(Request $request, $id)
	{
		$this->validate($request, [
				'name' => 'required|unique:users',
				'email' => 'required:unique:users',
				'password' => 'required'
			]);
		$input = $request->all();
		  if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
		        }else{
		            $input = array_except($input,array('password'));    
		        }

        $user = User::find($id);
		$user->update($input);

		return redirect('auth/index')->with('success','User updated successfully');
	}

	// update role function
	public function roleEdit($id)
	{
		$roles = Role::find($id);
		return view('auth.roleupdate',compact('roles'));
	}
	public function roleUpdate(Request $request, $id)
	{
		$this->validate($request, [
			 	'name' => 'required|unique:roles',
			 	'display_name' => 'required|unique:roles',
			 	'description' => 'required'
			]);	
		$input = $request->all();
		$role = Role::find($id);
		$role->update($input);

		return redirect('auth/role')->with('success','Sucessfully');
	}

	//function Role Show
	public function roleShow($id)
	{
		 $roles = Role::find($id);
        return view('auth/roleshow',compact('roles'));
	}
	//function user show
	public function userShow($id)
	{
		$users = User::find($id);
		return view('auth/usershow',compact('users'));
	}
		
}
