@extends('layout.member.master')

@section('title', 'Selamat Datang')

@section('content')

@if (Auth::user()->jabatan == 'Guru')
	<!-- main -->
	<div class="ui grid text container">
            <div class="eight wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <h4><i class="upload icon"></i>Upload Berkas</h4>
                    @if (Session::has('success'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('success') }}
                        </div>
                    @endif
                    <br>
                    <form class="ui grid form" role="form" action="{{ route('berkas.proses') }}" method="post" enctype="multipart/form-data" files="true">
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                           
                           	<div class="field">
                                <label for="nama"><i class="hashtag icon"></i>Nama : </label>
                           		<input type="hidden" placeholder="{{ Auth::user()->id }}" name="id">
                        		<input type="text" name="username" placeholder="{{ Auth::user()->username }}" class="form-control" disabled> 
                           	</div>

                            <div class="field {{ $errors->has('nama') ? 'error' : '' }}">
                                <label for="nama"><i class="hashtag icon"></i>Judul : </label>
                                <input type="text" name="nama" placeholder="Judul" id="nama" autofocus>
                                @if($errors->has('nama'))
                                    <br><small>{{ $errors->first('nama') }} </small>
                                @endif
                            </div>

                            <div class="field {{ $errors->has('deskripsi') ? 'error' : '' }}">
                                <label for="deskripsi"><i class="write icon"></i>Deskripsi : </label>
                                <input type="text" name="deskripsi" placeholder="Deskripsi singkat" id="deskripsi">
                                @if($errors->has('deskripsi'))
                                    <br><small>{{ $errors->first('deskripsi') }} </small>
                                @endif
                            </div>

                            <div class="field {{ $errors->has('nama_file') ? 'error' : '' }}">
                                <label for="nama_file"><i class="file icon"></i>Nama File : </label>
                                <input type="file" name="nama_file" id="nama_file">
                                @if($errors->has('nama_file'))
                                    <br><small>{{ $errors->first('nama_file') }} </small>
                                @endif
                            </div>


                            <div class="field">
                                <input class="ui primary basic button" type="submit" name="simpan" value="Upload">
                            </div>

             
                        </div>
                        
                        
                        {{ csrf_field() }}
  
                    </form>

                </div>
            </div>
            

        </div>

	</div>
@else 

    <div class="ui text container">
        <h1>Halaman tidak ditemukan</h1>
        {!! redirect()->route('beranda') !!}
    </div>

@endif

@endsection
