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
					
					@include('admin/charts')

				
				</div>
			</div>
		</div>
	</div>

@endsection