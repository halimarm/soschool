<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    

    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {

    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) 
    	{
    		return redirect()->back()->with('info', 'Username atau Password salah!');
    	}

    	return redirect()->route('beranda');
    }


    // daftar
	
	public function getDaftar()
	{
		return view('daftar');
	}

	public function postDaftar(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|unique:users|email|max:255',
			'username' => 'required|unique:users|alpha_dash|max:20|min:6',
			'password' => 'required|min:6',

			'status' => 'required',
			'nama_depan' => 'required|max:255',
			'nama_belakang' => 'required|max:255',
			'jenis_kelamin' => 'required',
			'alamat' => 'required|max:255',
			// 'avatar' => 'max:255',

		]);

		User::create([
			'email' => $request->input('email'),
			'username' => $request->input('username'),
			'password' => bcrypt($request->input('password')),

			'status' => $request->input('status'),
			'nama_depan' => $request->input('nama_depan'),
			'nama_belakang' => $request->input('nama_belakang'),
			'jenis_kelamin' => $request->input('jenis_kelamin'),
			'alamat' => $request->input('alamat'),
			// 'avatar' => $request->input('avatar'),

		]);

		return redirect()->route('login')->with('sukses', 'Anda Telah Terdaftar, Silahkan Login');
	}

	public function getLogout()
	{
		Auth::logout();

		return redirect()->route('login');
	}

}
