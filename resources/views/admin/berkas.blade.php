@extends('layout.admin.master')

@section('title', 'Berkas')

@section('content')

	<div id="content">
		<div class="title">Berkas <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				
				<!-- <div>
					<a href="{{ route('admin.berkas.tambah') }}" class="ui button primary"><i class="add icon"></i>Tambah Berkas</a>
				</div> -->

				@if (Session::has('delete-berkas'))
					<div class="ui positive message">
						<i class="close icon"></i>
							{{ Session::get('delete-berkas') }}
					</div>
				@endif
				
				<div class="ui segment">
				
				<!-- content -->
				<table class="ui very basic celled padded table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>File</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						
					@foreach ($berkases as $berkas)
						
						<tr>
							<td>{{ $berkas->id }}</td>
							<td class="single line">
								<h4 class="ui image header">
									<img class="ui mini rounded image" src="/assets/uploads/user/no-photo.png" alt="Nama Lengkap">
									<div class="content">
										<a href="">
											@if ($berkas->user()->jabatan = 'Guru')
												{{ $berkas->user->username }}
											@else
												Administrator
											@endif
										</a>
										<div class="sub header">
											@if (!$berkas->user()->jabatan = 'Guru')
												{{ $berkas->user->username }}
											@else
												Administrator
											@endif
										</div>
									</div>
								</h4>
							</td>
							<td>
								<p>{{ $berkas->nama }}</p>
								<small>{{ $berkas->user->created_at->diffForHumans() }}</small>
							</td>
							<td>
								<p>{{ $berkas->deskripsi }}</p>
							</td>
							<td>
								<p>{{ $berkas->nama_file }}</p>
							</td>
							<td>
					
									<form class="ui small basic icon buttons" action="{{ route('admin.berkas.hapus', ['id' => $berkas->id]) }}" method="post">

										<button type="submit" class="ui icon button"><i class="close icon"></i></button>
										{{ csrf_field() }}
									</form>
									
								<!-- </div> -->
							</td>
						</tr>	

					@endforeach

					@if ($berkases->count() == 0)
						<tr>
							<td>Tidak ada data</td>
						</tr>
					@endif

					</tbody>
				</table>
				<!-- end -->

				</div>
			</div>
			

		</div>
	</div>

@endsection