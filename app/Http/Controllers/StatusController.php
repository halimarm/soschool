<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatusController extends Controller
{
    public function postStatus(Request $request)
    {
    	$this->validate($request, [
    		'status' => 'required|max:1000',
    	]);

    	Auth::user()->statuses()->create([
    		'body' => $request->input('status'),
    	]);

    	return redirect()->route('beranda');
    }

    public function getStatusEdit()
    {
        return view('user.edit-status');
    }

    public function postStatusEdit(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|max:1000',

        ]);

        Auth::user()->statuses()->notBalas()->update([
            'body' => $request->input('status'),
        ]);

        return redirect()->back()->with('ganti-status', 'Status sudah diganti');;
    }

    public function postBalas(Request $request, $statusId)
    {
        $this->validate($request, [
            "balas-{$statusId}" => 'required|max:100',
        ], [
            "required" => 'Harus diisi'
        ]);

        $status = Status::notBalas()->find($statusId);

        if (!$status) {
            return redirect()->route('beranda');
        }

        $balas = Status::create([
            'body' => $request->input("balas-{$statusId}"),
        ])->user()->associate(Auth::user());

        $status->replies()->save($balas);

        return redirect()->back();

    }

    public function getSuka($statusId)
    {
        $status = Status::find($statusId);

        if (!$status) {
            return redirect()->route('beranda');
        }

        if (Auth::user()->hasLikedStatus($status)) {
            return redirect()->back();
        }

        $like = $status->likes()->create([]);
        Auth::user()->likes()->save($like);

        return redirect()->back();

    }

    public function carbon()
    {
        // printf("Sekarang: %s", Carbon::now());
       date_default_timezone_set('Asia/Jakarta');
       Carbon::setLocale('id');

       $status = Carbon::now();

       printf("%s", $status->diffForHumans());
    }

}
