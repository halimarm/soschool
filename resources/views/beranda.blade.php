@extends('layout.member.master')

@section('title', 'Selamat Datang')

@section('content')

	<!-- main -->
	<div class="ui grid container" id="main">
		<div class="sixteen wide mobile ten wide tablet eleven wide computer column">
			<div class="ui segment">
				<p><i class="icon announcement"></i><b>Dinding Informasi</b></p>
			</div>

			<!-- form status -->
			<!-- <div class="ui padded segment">
				@include('beranda/status')
			</div> -->
			<div class="ui small modal">
				<i class="close icon"></i>
				<div class="header">Kirim Informasi</div>
				<div class=" content">
					@include('beranda/status')
				</div>
				
			</div>

			
			
			<!-- status'e wong2 -->
			@if (!$statuses->count())
				<p>Tidak Ada Status</p>
			@else

				@foreach ($statuses as $status)

					@include('user/status')
				
				@endforeach

				{!! $statuses->render() !!}
			
			@endif
			
			<!-- modal fullscreen -->
			<!-- @include('user/modal') -->
			
		</div>

		@include('beranda/aktifitas')

	</div>

@endsection
