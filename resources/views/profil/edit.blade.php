@extends('layout.member.master')

@section('title', 'Profil Edit')

@section('content')
	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				<div class="profil">
					<img class="ui medium rounded image" src="/assets/uploads/user/{{ Auth::user()->avatar }}">
					<h4>
						{{ Auth::user()->getNamaLengkap() }}
					</h4>
					<p><span>Siswa / 12 RPL</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<form action="{{ route('profil.avatar')  }}" enctype="multipart/form-data" method="post">
						<input type="file" name="avatar">
						<input type="submit" name="submit">
						{{ csrf_field() }}
					</form>
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
				<div class="about">
					<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
					<form class="ui grid" action="{{ route('profil.edit') }}" method="post">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							{{-- <p>
								<i class="at icon"></i>Username : 
								<span><input type="text" name="username" value="{{ Request::old('username') ?: Auth::user()->username }}"></span>
								@if($errors->has('username'))
									<br><small>{{ $errors->first('username') }} </small>
								@endif
							</p> --}}
							<p>
								<i class="at icon"></i>Nama Depan : 
								<span><input type="text" name="nama_depan" value="{{ Request::old('nama_depan') ?: Auth::user()->nama_depan }}"></span>
								@if($errors->has('nama_depan'))
									<br><small>{{ $errors->first('nama_depan') }} </small>
								@endif
							</p>
							<p>
								<i class="at icon"></i>Nama Belakang : 
								<span><input type="text" name="nama_belakang" value="{{ Request::old('nama_belakang') ?: Auth::user()->nama_belakang }}"></span>
								@if($errors->has('nama_belakang'))
									<br><small>{{ $errors->first('nama_belakang') }} </small>
								@endif
							</p>
							<p>
								<i class="user icon"></i>Jenis Kelamin : 
								<span><input type="text" name="jenis_kelamin" value="{{ Request::old('jenis_kelamin') ?: Auth::user()->jenis_kelamin }}"></span>
								@if($errors->has('jenis_kelamin'))
									<br><small>{{ $errors->first('jenis_kelamin') }} </small>
								@endif
							</p>
							<p>
								<i class="mail icon"></i>Kelas Jurusan : 
								<span><input type="text" name="kelas_jurusan" value="{{ Request::old('kelas_jurusan') ?: Auth::user()->kelas_jurusan }}"></span>
								@if($errors->has('kelas_jurusan'))
									<br><small>{{ $errors->first('kelas_jurusan') }} </small>
								@endif
							</p>
							<p>
								<i class="mail icon"></i>Status : 
								<span><input type="text" name="status" value="{{ Request::old('status') ?: Auth::user()->status }}"></span>
								@if($errors->has('status'))
									<br><small>{{ $errors->first('status') }} </small>
								@endif
							</p>
							
							{{-- <p><i class="user icon"></i>Status : <span>{{ Request::old('status') ?: Auth::user()->status }}</span></p> --}}
						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							{{-- <p>
								<i class="at icon"></i>Password : 
								<span><input type="password" name="nama_depan" value="{{ Request::old('password') ?: Auth::user()->password }}"></span>
								@if($errors->has('password'))
									<br><small>{{ $errors->first('password') }} </small>
								@endif
							</p> --}}
							<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span><input type="text" name="no_hp" value="{{ Request::old('no_hp') ?: Auth::user()->no_hp }}"></span></p>
							<p>
								<i class="calendar outline icon"></i>Tanggal Lahir : 
								<span><input type="text" name="tanggal_lahir" value="{{ Request::old('tanggal_lahir') ?: Auth::user()->tanggal_lahir }}"></span>
								@if($errors->has('tanggal_lahir'))
									<br><small>{{ $errors->first('tanggal_lahir') }} </small>
								@endif
							</p>
							<p>
								<i class="home icon"></i>Alamat Lengkap : 
								<span><input type="text" name="alamat" value="{{ Request::old('alamat') ?: Auth::user()->alamat }}"></span>
								@if($errors->has('alamat'))
									<br><small>{{ $errors->first('alamat') }} </small>
								@endif
							</p>
							<p>
								<i class="mail icon"></i>Email : 
								<span><input type="text" name="email" value="{{ Request::old('email') ?: Auth::user()->email }}"></span>
								@if($errors->has('email'))
									<br><small>{{ $errors->first('email') }} </small>
								@endif
							</p>
							
						</div>
						<input class="ui primary basic button" type="submit" name="simpan" value="Simpan">
						{{ csrf_field() }}
					</form>
				</div>

				
			</div>
		</div>
	</div>

@endsection