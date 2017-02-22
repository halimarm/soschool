@extends('layout.mlogin')

@section('title', 'Login Member')

@section('content')

	<div class="ui stackable two column grid ">
		<div class="bgcolor column">
			<div class="bg-left">
			<div class="ui segment">
				<a href="{{ route('login') }}" class="logo"><h3>SOSCHOOL<small></small></h3></a>
				<div class="desc headings">
					<h1>JEJARING SOSIAL</h1>
					<h3>SMKN 1 PURWOSARI</h3>
				</div>
			</div>
		</div>
		</div>
		<div class="column col-login" style="background-color: #fff;height:100vh !important;"">
			<div class="ui segment">
				<a href="{{ route('daftar') }}" class="ui labeled icon right floated button green"><i class="icon signup"></i>Daftar</a>
				<div class="desc">
						<form class="ui form" action="{{ route('login') }}" method="post">
							{{ csrf_field() }}
							<h3>Login Member Smknpur</h3>
							<div class="field">
								@include('layout.alerts')
							</div>
							<div class="field {{ $errors->has('username') ? 'error' : '' }}">
								<label class="ui inverted header">Username</label>
								<div class="ui large left icon input">
									<input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
									<i class="user icon"></i>
								</div>
							</div>
							<div class="field {{ $errors->has('password') ? 'error' : '' }}">
								<label>Password</label>
								<div class="ui large left icon input">
									<input name="password" type="password" placeholder="Password">
									<i class="key icon"></i>
								</div>
							</div>
				
							<div class="ui error message"></div>
							<button class="ui labeled icon button primary"><i class="icon sign in"></i>Login</button>
				
						</form>
				</div>
			</div>
		</div>
	</div>
@endsection