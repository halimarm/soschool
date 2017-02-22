@extends('layout.admin.master')

@section('title', 'Admin User')

@section('content')

    <div id="content">
        <div class="title">Profil <small>Administrator</small></div>
        <!-- <div class="sub-title">Administrator</div> -->
        <div class="ui grid ">
            <div class="eight wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <h4><i class="info circle icon"></i>Edit Profil</h4>
                    @if (Session::has('edit-profil'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('edit-profil') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('admin.editprofil') }}" method="POST">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                           

                            <div class="field">
                                <label><i class="at icon"></i>Nama Lengkap : </label>
                                <input type="text" name="nama" value="{{ Request::old('nama') ?: Auth::guard('admin')->user()->nama }}">
                                @if($errors->has('nama'))
                                    <br><small>{{ $errors->first('nama') }} </small>
                                @endif
                            </div>

                            <div class="field">
                                <label><i class="at icon"></i>Email : </label>
                                <input type="email" name="email" value="{{ Request::old('email') ?: Auth::guard('admin')->user()->email }}">
                                @if($errors->has('email'))
                                    <br><small>{{ $errors->first('email') }} </small>
                                @endif
                            </div>

                            <div class="field">
                                <label><i class="at icon"></i>Username : </label>
                                <input type="text" name="username" value="{{ Request::old('username') ?: Auth::guard('admin')->user()->username }}">
                                @if($errors->has('username'))
                                    <br><small>{{ $errors->first('username') }} </small>
                                @endif
                            </div>

                            


                            <div class="field">
                                <input class="ui primary basic button" type="submit" name="simpan" value="Simpan">
                            </div>

             
                        </div>
                        
                        
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
            

        </div>
    </div>

@endsection