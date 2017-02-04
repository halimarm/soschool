<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    
    // protected $redirectTo = '/admin';
    // protected $guard = 'admin';


    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $auth = auth()->guard('admin');

    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	if (!$auth->attempt($request->only(['username', 'password']), $request->has('remember'))) 
    	{
    		return redirect()->back()->with('info', 'Username atau Password salah!');
    	}

    	return redirect()->route('admin.index');
    }


    

	public function adminLogout()
	{
        $auth = auth()->guard('admin');

		$auth->logout();

		return redirect()->route('admin.login');
	}

}
