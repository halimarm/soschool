<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
	public function getResults(Request $request)
	{

		$query = $request->input('query');

		if (!$query) {
			return redirect()->route('beranda');
		}

		$users = User::where(DB::raw("CONCAT(nama_depan, '', nama_belakang)"), 'LIKE', "%{$query}%")->orWhere('username', 'LIKE', "%{$query}%")->get();


		return view('search.results')->with('users', $users);
	}

}
