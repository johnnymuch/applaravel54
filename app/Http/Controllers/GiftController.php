<?php

namespace App\Http\Controllers;

use App\Gift;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    //
	public function index()
	{
	   //
		$gifts = Gift::orderBy('id','DESC')->paginate(5); 
        return view ('gift.index',['gifts' => $gifts]);
	}

	//
	public function create()
	{
		return view ('gift.create');
	}

	//
	public function store(Request $request)
	{
	//
	$this->validate($request, [
            // 'name' => 'required',
            'name' => 'required',
            'category' => 'required',
            'photo' => 'required',
        ]);

        Gift::create($request->all());
        return redirect()->route('gift.index')
                         ->with('success','Gift created successfully');

	}


}
