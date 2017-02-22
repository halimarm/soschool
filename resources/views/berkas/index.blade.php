@extends('layout.member.master')

@section('title', 'Berkas')

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
									<a href='{{ asset("/file/berkas/$berkas->nama_file") }}' class="ui label">
										<i class="download icon"></i> Download
									</a>

									@if (Auth::user()->id == $berkas->user_id)
										<div class="ui inline dropdown right floated">
											<i class="angle down icon"></i>
											<div class="menu">
												<div class="item">
													
														<form action="{{ route('berkas.hapus', ['berkasId' => $berkas->id]) }}" method="post">
															<button class="del"><i class="close icon"></i>Hapus</button>
															{{ csrf_field() }}
														</form>
													
												</div>
											</div>
										</div>
									@endif
								</div>

							</div>
						</div>
					</div>


				</div>
			@endforeach

			@if ($berkases->count() == 0)
				<p>Tidak Ada Berkas</p>
			@endif
		</div>

	</div>

@endsection
