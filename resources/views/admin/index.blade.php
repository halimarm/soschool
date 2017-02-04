@extends('layout.admin.master')

@section('title', 'Dashboard')

@section('content')

	<div id="content">
		<div class="title">Dashboard <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet four wide computer column">
				<div class="ui segment">
					Admin : {{ auth('admin')->user()->count() }}
				</div>
			</div>
			<div class="eight wide mobile eight wide tablet four wide computer column">
				<div class="ui segment">
					Member : {{ $user->count() }}
				</div>
			</div>
			<div class="eight wide mobile eight wide tablet four wide computer column">
				<div class="ui segment">
					Status : {{ $status->count() }}
				</div>
			</div>
			<div class="eight wide mobile eight wide tablet four wide computer column">
				<div class="ui segment">
					Komentar : {{ $komentar->count() }}
				</div>
			</div>
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				<div class="ui segment">
				<p>Selamat Datang, {{ auth('admin')->user()->nama }}</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				</div>
			</div>
		</div>
	</div>

@endsection