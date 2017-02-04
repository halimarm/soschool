@extends('layout.admin.master')

@section('title', 'Tambah User')

@section('content')
<style type="text/css">
	.segment {
		padding: 25px !important;
	}
</style>
	<div id="content">
		<div class="title">Tambah User <small>Member</small></div>

		<div class="ui grid ">
			
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				<div class="ui segment">
					<form class="ui form" action="{{ route('daftar') }}" method="POST">
						
						<div class="ui grid">
							<div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
								<div class="field">
									@if (Session::has('sukses'))
										<div class="ui positive message">
											<i class="close icon"></i>
											{{ Session::get('sukses') }}
										</div>
									@endif
								</div>
							</div>
							<div class="sixteen wide mobile eight wide tablet eight wide computer column">
								<h4 class="ui dividing header">Informasi Login</h4>
								<div class="required field {{ $errors->has('username') ? 'error' : '' }}">
									<label>Username</label>
									<input type="text" placeholder="Username" name="username" value="{{ old('username') }}">
									@if($errors->has('username'))
										<small>{{ $errors->first('username') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('password') ? 'error' : '' }}">
									<label>Password</label>
									<input type="password" placeholder="Password" name="password">
									@if($errors->has('password'))
										<small>{{ $errors->first('password') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('password_confirmation') ? 'error' : '' }}">
									<label>Konfirmasi Password</label>
									<input type="password" placeholder="Konfirmasi Passowrd" name="password_confirmation">
									@if($errors->has('password_confirmation'))
										<small>{{ $errors->first('password_confirmation') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('email') ? 'error' : '' }}">
									<label>Email</label>
									<input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
									@if($errors->has('email'))
										<small>{{ $errors->first('email') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('username') ? 'error' : '' }}">
									<label>Status</label>
									<div class="ui selection dropdown">
										<input type="hidden" name="status">
										<i class="dropdown icon"></i>
										<div class="default text">Status</div>
										<div class="menu">
											<div class="item" name="status" value="Siswa" data-value="Siswa">Siswa</div>
											<div class="item" name="status" value="Guru" data-value="Guru">Guru</div>
										</div>
									</div>
									@if($errors->has('status'))
										<small>{{ $errors->first('status') }} </small>
									@endif
								</div>
							</div>
							<div class="sixteen wide mobile eight wide tablet eight wide computer column">
								<h4 class="ui dividing header">Informasi Pribadi</h4>
								<div class="required field {{ $errors->has('nama_depan') ? 'error' : '' }}">
									<label>Nama Depan</label>
									<input type="text" name="nama_depan" placeholder="Nama Depan" value="{{ old('nama_depan') }}">
									@if($errors->has('nama_depan'))
										<small>{{ $errors->first('nama_depan') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('nama_belakang') ? 'error' : '' }}">
									<label>Nama Belakang</label>
									<input type="text" name="nama_belakang" placeholder="Nama Belakang" value="{{ old('nama_belakang') }}">
									@if($errors->has('nama_belakang'))
										<small>{{ $errors->first('nama_belakang') }} </small>
									@endif
								</div>
								<div class="required field {{ $errors->has('jenis_kelamin') ? 'error' : '' }}">
									<label>Jenis Kelamin</label>
									<div class="ui selection dropdown">
										<input type="hidden" name="jenis_kelamin">
										<i class="dropdown icon"></i>
										<div class="default text">Jenis Kelamin</div>
										<div class="menu">
											<div class="item" name="jenis_kelamin" value="Laki-Laki" data-value="Laki-Laki">Laki-Laki</div>
											<div class="item" name="jenis_kelamin" value="Perempuan" data-value="Perempuan">Perempuan</div>
										</div>
									</div>
									@if($errors->has('jenis_kelamin'))
										<small>{{ $errors->first('jenis_kelamin') }} </small>
									@endif
								</div>
								
								<div class="required field {{ $errors->has('alamat') ? 'error' : '' }}">
									<label>Alamat</label>
									<textarea placeholder="Alamat" name="alamat" rows="5">{{ old('alamat') }}</textarea>
									@if($errors->has('alamat'))
										<small>{{ $errors->first('alamat') }} </small>
									@endif
								</div>
								<!-- mentok -->
								<div class="required inline field">
								
									<button class="ui button right floated primary"><i class="add icon"></i>Submit</button>
									<br><br>
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