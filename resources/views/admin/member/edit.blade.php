@extends('layout.admin.master')

@section('title', 'Admin Member')

@section('content')

    <div id="content">
        <div class="title">Member <small>Administrator</small></div>
        <!-- <div class="sub-title">Administrator</div> -->
        <div class="ui grid ">
            <div class="eight wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <h4><i class="info circle icon"></i>Edit Member</h4>
                    @if (Session::has('edit-profil'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('edit-profil') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('admin.member.edit', $users->username) }}" method="POST">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                           

                            <div class="field">
                                <label><i class="at icon"></i>Nama Lengkap : </label>
                                <input type="text" name="nama" value="{{ Request::old('nama') ?: $users->username }}">
                                @if($errors->has('nama'))
                                    <br><small>{{ $errors->first('nama') }} </small>
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