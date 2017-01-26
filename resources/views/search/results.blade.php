@extends('layout.member.master')

@section('title', 'Seach Result')

@section('content')
	
	<div class="ui container">
		<h4>Pencarian "{{ Request::input('query') }}"</h4>

	@if (!$users->count())

		<p>User tidak ditemukan</p>

	@else

		
		@include('user/user-search')


	@endif

	</div>

@endsection