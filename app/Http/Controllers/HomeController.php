<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Status;


class HomeController extends Controller
{

	public function index()
	{
		if (Auth::check()) {
			// return view('login');
			$statuses = Status::notBalas()->where(function($query){
				return $query->where('user_id', Auth::user()->id)->orWhereIn('user_id', Auth::user()->pluck('id'));
			})->orderBy('created_at', 'desc')->paginate(20);
			
			return view('beranda')->with('statuses', $statuses);
		}


		return redirect()->route('login');
	}

    public function profil()
    {
    	return view('profil');
    }

    public function berkas()
    {
    	return view('berkas');
    }
    
}
