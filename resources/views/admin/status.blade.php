@extends('layout.admin.master')

@section('title', 'Status')

@section('content')

	<div id="content">
		<div class="title">Status <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				
				@if (Session::has('delete-status'))
					<div class="ui positive message">
						<i class="close icon"></i>
							{{ Session::get('delete-status') }}
					</div>
				@endif
				<div class="ui segment">
					
				<!-- content -->
				<table class="ui very basic celled padded table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nama Lengkap</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($statuses as $status)
						<tr>
							<td>{{ $status->id }}</td>
							<td class="single line">
								<h4 class="ui image header">
									<img class="ui mini rounded image" src="/assets/uploads/user/{{ $status->user->avatar }}" alt="Nama Lengkap">
									<div class="content">
										<a href="">{{ $status->user->getNamaLengkap() }}</a>
										<div class="sub header">{{ $status->user->username }}</div>
									</div>
								</h4>
							</td>
							<td>
								<p>{{ $status->body }}</p>
								<small>{{ $status->user->created_at->diffForHumans() }}</small>
							</td>
							<td>
								<!-- <div class="ui small basic icon buttons"> -->
									<!-- <a class="ui icon button" href=""><i class="unhide icon"></i></a> -->
									<!-- <a class="ui icon button" href=""><i class="edit icon"></i></a> -->
									<form class="ui small basic icon buttons" action="{{ route('admin.status.hapus', ['id' => $status->id]) }}" method="post">

										<button onclick="return confirm ('Apakah Anda Yakin ingin menghapus status ini?')" type="submit" class="ui icon button" href=""><i class="close icon"></i></button>
										{{ csrf_field() }}
									</form>
								<!-- </div> -->
							</td>
						</tr>
					@endforeach

					@if ($statuses->count() == 0)
						<tr>
							<td>Tidak ada data</td>
						</tr>
					@endif

					</tbody>
				</table>
				<!-- end -->

				</div>
				{!! $statuses->render() !!}
			</div>
			

		</div>
	</div>

@endsection