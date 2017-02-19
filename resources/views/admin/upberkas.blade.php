@extends('layout.admin.master')

@section('title', 'Tambah User')

@section('content')
<style type="text/css">
	.segment {
		padding: 25px !important;
	}
</style>
	<div id="content">
		<div class="title">Tambah Admin <small>Administrator</small></div>

		<div class="ui grid ">
			
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				<div class="ui segment ">
					<form class="ui form" action="{{ route('admin.berkas.proses') }}" method="POST" enctype="multipart/form-data" files="true">
						
						<div class="ui grid">
							<div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
								<div class="field">
									@if (Session::has('tambah-berkas'))
										<div class="ui positive message">
											<i class="close icon"></i>
											{{ Session::get('tambah-berkas') }}
										</div>
									@endif
								</div>
							</div>
							<div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
								<!-- <h4 class="ui dividing header">Informasi Login</h4> -->
								<div class="field">
                                <label for="nama"><i class="hashtag icon"></i>Nama : </label>
                           		<input type="hidden" placeholder="{{ Auth::guard('admin')->user()->id }}" name="id">
                        		<input type="text" name="username" placeholder="{{ Auth::guard('admin')->user()->username }}" class="form-control" disabled> 
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
								{{ csrf_field() }}
							</div>
							
						</div>
					</form>

				</div>
				<!-- <a href="{{ route('admin.member') }}" class="ui button"><i class="left arrow icon"></i>Kembali</a> -->
			</div>
			

		</div>
	</div>

@endsection