<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
	public function getProfil($username)
	{

		$user = User::where('username', $username)->first();

		if (!$user) {
			abort(404);
		}

		$statuses = $user->statuses()->notBalas()->get();

		return view('profil.index')
		->with('user', $user)
		->with('statuses', $statuses);
	}

	public function getProfilEdit()
	{
		return view('profil.edit');
	}

	public function postProfilEdit(Request $request)
	{
		$this->validate($request, [
			// 'username' => 'max:50',
			'nama_depan' => 'max:50',
			'nama_belakang' => 'max:50',
			'alamat' => 'max:50',
			'email' => 'max:50',
			'jenis_kelamin' => 'max:50',
			'no_hp' => 'max:12',
			'kelas_jurusan' => 'max:50',
			'status' => 'max:50',
			'tanggal_lahir' => 'max:50',
			// 'avatar' => 'max:50',

		]);

		Auth::user()->update([
			// 'username' => $request->input('username'),
			'nama_depan' => $request->input('nama_depan'),
			'nama_belakang' => $request->input('nama_belakang'),
			'alamat' => $request->input('alamat'),
			'email' => $request->input('email'),
			'jenis_kelamin' => $request->input('jenis_kelamin'),
			'no_hp' => $request->input('no_hp'),
			'kelas_jurusan' => $request->input('kelas_jurusan'),
			'status' => $request->input('status'),
			'tanggal_lahir' => $request->input('tanggal_lahir'),
			// 'avatar' => $request->input('avatar'),
		]);

		return redirect()->route('profil.edit')->with('info', 'Profil telah di update');
	}

	// gambar profil (avatar)
	// public function avatar()
	// {
	// 	return view('user.avatar');
	// }

	public function postAvatar(Request $request)
	{
		// handle the user upload avatar
		if ($request->hasFile('avatar')) {

			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(300,300)->save( public_path('/assets/uploads/user/' . $filename) );

			$user = Auth::user();
			$user->avatar = $filename;
			$user->save();

		}

		return view('profil.edit');
	}

}
