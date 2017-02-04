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
					<form class="ui form" action="{{ route('admin.tambah') }}" method="POST">
						
						<div class="ui grid">
							<div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
								<div class="field">
									@if (Session::has('tambah-admin'))
										<div class="ui positive message">
											<i class="close icon"></i>
											{{ Session::get('tambah-admin') }}
										</div>
									@endif
								</div>
							</div>
							<div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
								<!-- <h4 class="ui dividing header">Informasi Login</h4> -->
								<div class="required field {{ $errors->has('nama') ? 'error' : '' }}">
									<label>Nama</label>
									<input type="text" placeholder="Nama" name="nama" value="{{ old('nama') }}">
									@if($errors->has('nama'))
										<small>{{ $errors->first('nama') }} </small>
									@endif
								</div>
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
								
								<div class="required inline field">
								
									<button type="submit" class="ui button primary"><i class="add icon"></i>Submit</button>
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