<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Tracker;
use App\Models\Berkas;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
        
    }

    public function index()
    {
        $user = User::all();
        $admin = Admin::all();
        $status = Status::NotBalas()->get();
        $komentar = Status::Balas()->get();
        $trackers = Tracker::all();

    	return view('admin.index')->with('user', $user)->with('admin', $admin)->with('status', $status)->with('komentar', $komentar)->with('trackers', $trackers);;
    }

    public function login()
    {
    	return view('admin.login');
    }


    /**
     * ------------------------------- member -------------------------------
     */

    public function member()
    {
    	$users = User::all();

    	return view('admin.member')->with('users', $users);
    }

    public function status()
    {

    	$statuses = Status::NotBalas()->orderBy('created_at', 'desc')->get();
    	return view('admin.status')->with('statuses', $statuses);
    
    }

    public function komentar()
    {
        $statuses = Status::Balas()->orderBy('created_at', 'desc')->get();
        return view('admin.komentar')->with('statuses', $statuses);

    	// return view('admin.komentar');
    }

    public function detail($username)
    {
    	$user = User::where('username', $username)->first();

		if (!$user) {
			abort(404);
		}

		$statuses = $user->statuses()->notBalas()->get();

    	return view('admin.member.detail')->with('user', $user)
		->with('statuses', $statuses);
    }

    public function hapus($id)
    {
        // dd($id);
        User::find($id)->delete();
        return redirect()->route('admin.member')->with('success','User telah dihapus');
    }

    public function getTambahUser()
    {
        return view('admin.member.tambah');
    }


    /**
     * ------------------------------- Admin -------------------------------
     */

    public function getUserAdmin()
    {

        $admins = Admin::all();

        return view('admin.user')->with('admins', $admins);
    }

    // tambah admin
    public function getTambahAdmin()
    {
        return view('admin.tambah');
    }
    public function postTambahAdmin(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'username' => 'required|unique:admins|alpha_dash|max:20|min:6',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'email' => 'required|unique:admins|email|max:255',
        ]);

        Admin::create([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('admin.user')->with('tambah-admin', 'Berhasil Menambahkan Admin');
    }

    // HAPUS status & komentar
    public function statusHapus($id)
    {
        Status::find($id)->delete();
        return redirect()->back()->with('delete-status','Status telah dihapus');
    }
    public function komentarHapus($id)
    {
        Status::find($id)->delete();
        return redirect()->back()->with('delete-komentar','Komentar telah dihapus');
    }
    // HAPUS Admin
    public function hapusAdmin($id)
    {
        Admin::find($id)->delete();
        return redirect()->back()->with('delete-admin','Admin telah dihapus');
    }

    // HAPUS Berkas
    public function hapusBerkas($id)
    {
        Berkas::find($id)->delete();
        return redirect()->back()->with('delete-berkas','Berkas telah dihapus');
    }

    // pencarian data

    public function cari(Request $request)
    {

        $cari = $request->get('search');
        $users = User::where('nama_depan', 'LIKE', '%'.$cari.'%')->orWhere('nama_belakang', 'LIKE', '%'.$cari.'%')->orWhere('username', 'LIKE', '%'.$cari.'%')->get();

        return view('admin.member')->with('users', $users);
    }


    // berkas
    public function berkas()
    {
        $berkases = Berkas::all();

        return view('admin.berkas')->with('berkases', $berkases);
    }

    public function tambahBerkas()
    {
        return view('admin.upberkas');
    }
    public function prosesBerkas(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'nama_file' => 'required|mimes:pdf,doc,ppt,xls,docx,pptx,xlsx,rar,zip',
        ]);

        $user = User::first();

        $berkas = new Berkas($request->input());

        // dd($request->input());
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $berkas->user_id = Auth::guard('admin')->user()->id;


        if ($file = $request->hasFile('nama_file')) {

            $file = $request->file('nama_file') ;

            $namaFile = $file->getClientOriginalName();
            $destinationPath = public_path().'/file/berkas/';
            $file->move($destinationPath, $namaFile);

            $berkas->nama_file = $namaFile;

        }

        $berkas->save();

        return redirect()->route('admin.berkas')->with('berkas-upload', 'Uploaded:)');
    }

}
