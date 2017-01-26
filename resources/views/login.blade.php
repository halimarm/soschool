@extends('layout.mlogin')

@section('title', 'Login Member')

@section('content')

	<div class="ui middle aligned center aligned grid">
		<div class="column">
			
			<form class="ui large form" action="{{ route('login') }}" method="POST">

				<div class="ui segment">
					<h2 class="ui image header">
			<!-- <img src="assets/images/logo.png" class="image"> -->
						<div class="content">.:: Login Member ::.</div>
					</h2>
					<div class="field">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="username" placeholder="Username"></div>
							@if($errors->has('username'))
								<small>{{ $errors->first('username') }} </small>
							@endif
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="password" placeholder="Password"></div>
							@if($errors->has('username'))
								<small>{{ $errors->first('password') }} </small>
							@endif
					</div>
					<!-- <div class="field">
						<label>
							<input type="checkbox" name="remember"> Remember me
						</label>
					</div> -->
					<div class="field"> 
						<button class="ui fluid large blue submit button">Login</button>
					</div>
					<p>Tidak Mempunyai Akun? &nbsp; <a href="{{ route('daftar') }}">Daftar</a></p> 
	 			</div>
				<div class="ui error message"></div>
				{{ csrf_field() }}	
			</form>
			
			
		</div>
	</div>
	<p class="copy">Copyright &copy; <a href="http://smkn1purwosari.sch.id">SMKN 1 PURWOSARI</a> 2016 - All Rigths Reserved</p>
@endsection