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
					<p><span>{{ Auth::user()->username }}</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<a class="ui primary basic button" href="{{ route('password.ganti') }}">Ganti Password</a>
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">

				<div class="about">
					<h4><i class="info circle icon"></i>Edit Informasi Lengkap</h4>
					@include('layout.alerts')<br>
					<form class="ui grid form" action="{{ route('profil.edit') }}" method="post">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">

							<div class="field">
								<label><i class="at icon"></i>Username : </label>
								<input type="text" name="username" value="{{ Request::old('username') ?: Auth::user()->username }}">
								@if($errors->has('username'))
									<br><small>{{ $errors->first('username') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="at icon"></i>Nama Depan : </label>
								<input type="text" name="nama_depan" value="{{ Request::old('nama_depan') ?: Auth::user()->nama_depan }}">
								@if($errors->has('nama_depan'))
									<br><small>{{ $errors->first('nama_depan') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="at icon"></i>Nama Belakang : </label>
								<input type="text" name="nama_belakang" value="{{ Request::old('nama_belakang') ?: Auth::user()->nama_belakang }}">
								@if($errors->has('nama_belakang'))
									<br><small>{{ $errors->first('nama_belakang') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="user icon"></i>Jenis Kelamin : </label>
								<div class="ui selection dropdown">
									<input type="hidden" name="jenis_kelamin">
									<i class="dropdown icon"></i>
									<div class="default text" name="jenis_kelamin">{{ Request::old('jenis_kelamin') ?: Auth::user()->jenis_kelamin }}</div>
									<div class="menu">
										<div class="item" name="jenis_kelamin" value="Laki-Laki" >Laki-Laki</div>
										<div class="item" name="jenis_kelamin" value="Perempuan">Perempuan</div>
									</div>
								</div>
								@if($errors->has('jenis_kelamin'))
									<br><small>{{ $errors->first('jenis_kelamin') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="hashtag icon"></i>Kelas Jurusan : </label>
								<input type="text" name="kelas_jurusan" value="{{ Request::old('kelas_jurusan') ?: Auth::user()->kelas_jurusan }}">
								@if($errors->has('kelas_jurusan'))
									<br><small>{{ $errors->first('kelas_jurusan') }} </small>
								@endif
							</div>

							
						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">


							<div class="field">
								<label><i class="whatsapp icon"></i>Hp/Whatsapp : </label>
								<input type="text" name="no_hp" value="{{ Request::old('no_hp') ?: Auth::user()->no_hp }}">
							</div>

							<div class="field">
								<label><i class="calendar outline icon"></i>Tanggal Lahir : </label>
								<input type="date" data-date-format="DD MM YYYY" name="tanggal_lahir" value="{{ Request::old('tanggal_lahir') ?: Auth::user()->tanggal_lahir }}">
								@if($errors->has('tanggal_lahir'))
									<br><small>{{ $errors->first('tanggal_lahir') }} </small>
								@endif
							</div>

							<!-- <div class="field">
								<label><i class="calendar outline icon"></i>Tanggal Lahir : </label>
								<div class="ui calendar" id="tanggal">
				
										<input name="tanggal_lahir" type="text" placeholder="tanggal/bulan/tahun" value="{{ Request::old('tanggal_lahir') ?: Auth::user()->tanggal_lahir }}"">
										@if($errors->has('tanggal_lahir'))
											<br><small>{{ $errors->first('tanggal_lahir') }} </small>
										@endif
					
								</div>
							</div> -->

							<div class="field">
								<label><i class="home icon"></i>Alamat Lengkap : </label>
								<input type="text" name="alamat" value="{{ Request::old('alamat') ?: Auth::user()->alamat }}">
								@if($errors->has('alamat'))
									<br><small>{{ $errors->first('alamat') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="mail icon"></i>Email : </label>
								<input type="text" name="email" value="{{ Request::old('email') ?: Auth::user()->email }}">
								@if($errors->has('email'))
									<br><small>{{ $errors->first('email') }} </small>
								@endif
							</div>

							<div class="field">
								<label><i class="tag icon"></i>Status : </label>
								<div class="ui selection dropdown">
									<input type="hidden" name="status">
									<i class="dropdown icon"></i>
									<div class="default text" name="status">{{ Request::old('status') ?: Auth::user()->status }}</div>
									<div class="menu">
										<div class="item" name="status" value="{{ Request::old('status') ?: Auth::user()->status }}" data-value="{{ Request::old('status') ?: Auth::user()->status }}">{{ Request::old('status') ?: Auth::user()->status }}</div>
										{{-- <div class="item" name="status" value="Guru" data-value="Guru">Guru</div> --}}
									</div>
								</div>
							</div>
							
						</div>
						<input class="ui primary basic button" type="submit" name="simpan" value="Simpan">
						{{ csrf_field() }}
					</form>
				</div>

				
			</div>
		</div>
	</div>

@endsection