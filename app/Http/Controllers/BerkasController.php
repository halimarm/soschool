<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berkas;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Validator;

// use App\Http\Controllers\Controller;

class BerkasController extends Controller
{
    public function index(Request $request)
    {
    	$berkases = Berkas::all();
    	
    	return view('berkas.index')->with('berkases', $berkases);

    }

    public function upload()
    {

    	// dd($username);
  
    	return view('berkas.upload');

    }


    public function getCreate($id)
    {
    	$user = User::where('id', $id)->first();

    	return view('berkas.upload')->with('user', $user);

    }

    public function proses(Request $request)
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

        $berkas->user_id = Auth::user()->id;


		if ($file = $request->hasFile('nama_file')) {

			$file = $request->file('nama_file') ;

			$namaFile = $file->getClientOriginalName();
			$destinationPath = public_path().'/file/berkas/';
			$file->move($destinationPath, $namaFile);

			$berkas->nama_file = $namaFile;

		}

		$berkas->save();

		return redirect()->route('berkas.index')->with('success', 'Uploaded:)');
    	
    }

    public function hapus($id)
    {
    	Berkas::find($id)->delete();
        return redirect()->back()->with('delete-berkas','berkas telah dihapus');
    }

    public function ber()
    {
    	$berkases = Berkas::orderBy('id', 'DESC');
    	dd($berkases);
    }


}
