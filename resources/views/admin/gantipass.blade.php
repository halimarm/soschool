@extends('layout.admin.master')

@section('title', 'Admin User')

@section('content')

    <div id="content">
        <div class="title">Admin <small>Administrator</small></div>
        <!-- <div class="sub-title">Administrator</div> -->
        <div class="ui grid ">
            <div class="eight wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <h4><i class="info circle icon"></i>Edit Password</h4>
                    @if (Session::has('success'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('admin.updateAdmin') }}" method="post">
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

                            <div class="field">
                                <input class="ui primary basic button" type="submit" name="simpan" value="Ganti Password">
                            </div>

             
                        </div>
                        
                        
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                    </form>

                </div>
            </div>
            

        </div>
    </div>

@endsection