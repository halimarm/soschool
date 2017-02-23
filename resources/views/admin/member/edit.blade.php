@extends('layout.admin.master')

@section('title', 'Admin Member')

@section('content')

    <div id="content">
        <div class="title">Member <small>Administrator</small></div>
        <!-- <div class="sub-title">Administrator</div> -->
        <div class="ui grid ">
            <div class="eight wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <h4><i class="info circle icon"></i>Reset Password Member</h4>
                    @if (Session::has('edit-password'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('edit-password') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('admin.member.edit', $users->username) }}" method="POST">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                           

                            <div class="field disabled">
                                <!-- <label><i class="at icon"></i>Username : </label> -->
                                <input type="text" name="nama" value="{{ Request::old('nama') ?: $users->username }}">
                                @if($errors->has('nama'))
                                    <br><small>{{ $errors->first('nama') }} </small>
                                @endif
                            </div>

                            <div class="field">
                                <label><i class="at icon"></i>Password Baru : </label>
                                <input type="password" name="password" value="" placeholder="password baru">
                                @if($errors->has('password'))
                                    <br><small>{{ $errors->first('password') }} </small>
                                @endif
                            </div>

                            <div class="field">
                                <label><i class="at icon"></i>Konfirmasi Password Baru : </label>
                                <input type="password" name="password_confirmation" value="" placeholder="konfirmasi password baru">
                                @if($errors->has('password'))
                                    <br><small>{{ $errors->first('password') }} </small>
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