@extends('layout.member.master')

@section('title', 'Berkas File')

@section('content')
<style type="text/css">
	.ui.divided.items .icon {padding-right: 0px!important;}
</style>
	<!-- main -->
	<div class="ui grid text container " id="main">
		<div class="sixteen wide mobile ten wide tablet sixteen wide computer column">

			@foreach ($berkases as $berkas)
				<div class="ui segment">
					<div class="ui divided items">
						<div class="item">
							
							<div class="content">
								<a class="header">{{ $berkas->nama }}</a>
								<div class="meta">
									<span class="cinema">oleh : {{ $berkas->user->username }}</span>
								</div>
								<div class="description">
									<p>{{ $berkas->deskripsi }}</p>
								</div>
								<div class="extra">
									<div class="ui basic label"><i class="tag icon"></i>{{ $berkas->nama_file }}</div>
									<a href='{{ asset("berkas/$berkas->nama_file") }}' class="ui label">
										<i class="download icon"></i> Download
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			@endforeach
			
		</div>

	</div>

@endsection
