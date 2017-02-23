<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Auth;
use Hash;
use Validator;

class PasswordController extends Controller
{
    /**
    * @return mixed
    */
    public function ganti()
    {
        return view('password.ganti');
    }

    public function gantiAdmin()
    {
        return view('admin.gantipass');
    }

    /**
     * @return mixed Redirect
     */
    public function update()
    {
        // custom validasi
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });

        // alert custom
        $messages = [
            'password' => 'Password lama tidak cocok.',
        ];

        // vallidasi
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',

        ], $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        // update password
        $user = User::find(Auth::id());

        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()
            ->route('password.ganti')
            ->withSuccess('Password Telah Diganti');
    }

    public function updateAdmin()
    {

        // dd(Auth::guard('admin')->user()->password);

        // custom validasi
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::guard('admin')->user()->password);
        });

        // alert custom
        $messages = [
            'password' => 'Password lama tidak cocok.',
        ];

        // vallidasi
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',

        ], $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        // update password
        $user = Admin::find(Auth::guard('admin')->user()->id);

        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()
            ->back()
            ->withSuccess('Password Telah Diganti');
    }

    public function getEditPassMember($username)
    {
        $users = User::where('username', $username)->first();

        if (!$users) {
            abort(404);
        }

        return view('admin.member.edit')->with('users', $users);
    }



    // member pada admin
    public function postEditPassMember(Request $request)
    {
        $users = User::first();

        // $this->validate($request, [
        //     'password' => 'max:50',
        //     'password_confirmation' => 'max:50',

        // ]);

        // vallidasi
        $validator = Validator::make(request()->all(), [
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        // $users->update([
        //     // 'username' => $request->input('username'),
        //     'password' => $request->input('password'),
        //     'password_confirmation' => $request->input(bcrypt('password_confirmation')),


        // ]);
        $user = User::find($users->id);

        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()->back()->with('edit-password', 'Password telah di reset');
    } 

}
