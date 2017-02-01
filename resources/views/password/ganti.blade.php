@extends('layout.member.master')

@section('title', 'Profil Edit')

@section('content')
<style type="text/css">
    .form-upload > input.upload {
        display: none;
    }
    .form-upload small {
        color: #74b9ff;
        font-size: 17px;
    }
    .ui.form .field>label {
        color: #444;
    }
</style>
    <div class="ui container" id="about">
        <div class="ui grid container" id="main">
            <div class="sixteen wide mobile six wide tablet four wide computer column" >
                <div class="profil">
                    <div class="ui medium rounded image upload">
                        <div class="ui inverted dimmer">
                            <div class="content">
                                <div class="center">
                                    <form class="form-upload" action="{{ route('profil.avatar')  }}" enctype="multipart/form-data" method="post">
                                        <label for="file-input">
                                            <h1>
                                                <i class="upload icon large" style="margin-left:8px!important;cursor: pointer;"></i><br> <small>Upload Profil</small>
                                                </h1>
                                        </label>

                                        <input id="file-input" class="upload" type="file" name="avatar" onchange="javascript:this.form.submit();">
                                        {{-- <input class="ui button primary" type="submit" name="submit"> --}}
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <img class="ui image" src="/assets/uploads/user/{{ Auth::user()->avatar }}">
                    </div>
                    <h4>
                        {{ Auth::user()->getNamaLengkap() }}
                    </h4>
                    <p><span>Siswa / 12 RPL</span></p>
                    <!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
                    
                </div>
            </div>
            <div class="sixteen wide mobile ten wide tablet nine wide computer column">

                <div class="about">
                    <h4><i class="info circle icon"></i>Edit Password</h4>
                    @if (Session::has('success'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('password.update') }}" method="post">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                           

                            <div class="field {{ $errors->has('current_password') ? 'error' : '' }}">
                                <label for="current_password"><i class="hashtag icon"></i>Password Lama : </label>
                                <input type="password" name="current_password" id="current_password" autofocus>
                                @if($errors->has('current_password'))
                                    <br><small>{{ $errors->first('current_password') }} </small>
                                @endif
                            </div>

                            <div class="field {{ $errors->has('password') ? 'error' : '' }}">
                                <label for="password"><i class="hashtag icon"></i>Password Baru : </label>
                                <input type="password" name="password" id="password" autofocus>
                                @if($errors->has('password'))
                                    <br><small>{{ $errors->first('password') }} </small>
                                @endif
                            </div>

                            <div class="field {{ $errors->has('password_confirmation') ? 'error' : '' }}">
                                <label for="password_confirmation"><i class="hashtag icon"></i>Konfirmasi Password Baru : </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" autofocus>
                                @if($errors->has('password_confirmation'))
                                    <br><small>{{ $errors->first('password_confirmation') }} </small>
                                @endif
                            </div>

             
                        </div>
                        
                        <input class="ui primary basic button" type="submit" name="simpan" value="Ganti Password">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                    </form>
                </div>

                
            </div>
        </div>
    </div>

@endsection