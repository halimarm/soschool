@extends('layout.member.master')

@section('title', 'SOSCHOOL')

@section('content')

	<!-- main -->
	<div class="ui grid container" id="main">
		<div class="sixteen wide mobile ten wide tablet eleven wide computer column">
			<div class="ui segment">
				<p><i class="icon announcement"></i><b>Dinding Informasi</b></p>
			</div>

	
			<div class="ui small modal">
				<i class="close icon"></i>
				<div class="header">Kirim Informasi</div>
				<div class=" content">
					@include('beranda/status')
				</div>
				
			</div>

			
			
			<!-- view status -->
			@if (!$statuses->count())
				<p>Tidak Ada Status</p>
			@else

				@foreach ($statuses as $status)

					@include('user/status')
				
				@endforeach

				{!! $statuses->render() !!}
			
			@endif
			
		
			
		</div>

		@include('beranda/aktifitas')

	</div>

@endsection
