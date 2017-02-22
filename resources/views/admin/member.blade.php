@extends('layout.admin.master')

@section('title', 'Member')

@section('content')

	<div id="content">
		<div class="title">Member <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				<div class="ui segment">
				<a href="{{ route('admin.member.tambah') }}" class="ui button primary right floated"><i class="add icon"></i>Tambah User</a>
					<form action="{{ route('admin.search') }}" method="GET" role="search">
						<div class="fields">
							<div class="ui action input">
								<input type="text" name="search" placeholder="Pencarian">
								<button type="submit" class="ui button">Cari</button>
							</div>
						</div>
					</form>
				</div>

				<div class="ui segment">
					

				<!-- content -->
				<table class="ui very basic celled padded table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Jabatan</th>
							<th>Kelas Jurusan</th>
							<th>Tanggal Mendaftar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

					@foreach ($users as $user) 
						
						<tr>
							<td>{{ $user->id }}</td>
							<td class="single line">
								<h4 class="ui image header">
									<img class="ui mini rounded image" src="/assets/uploads/user/{{ $user->avatar }}" alt="Nama Lengkap">
									<div class="content">
										<a href="{{ route('admin.member.detail', ['username' => $user->username]) }}">{{ $user->getNamaLengkap() }}</a>
										<div class="sub header">{{ $user->username }}</div>
									</div>
								</h4>
							</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->jabatan }}</td>
							<td>{{ $user->jurusan }}</td>
							<td>{{ Carbon\Carbon::now() }}</td>
							<td>
								<div class="ui small basic icon buttons">
									<a class="ui icon button" href="{{ route('admin.member.detail', $user->username) }}"><i class="unhide icon"></i></a>
								</div>
								<!-- <div class="ui small basic icon buttons">
									<a class="ui icon button" href=""><i class="edit icon"></i></a>
								</div> -->
								<form class="ui small basic icon buttons" action="{{ route('admin.member.hapus', ['id' => $user->id]) }}" method="post">

										<button type="submit" class="ui icon button" href=""><i class="close icon"></i></button>
										{{ csrf_field() }}
								</form>
							</td>
						</tr>

					@endforeach

					@if ($users->count() == 0)
						<tr>
							<td>Tidak Ada Data</td>
						</tr>
					@endif

					</tbody>
				</table>


				<!-- end -->

				</div>
				{!! $users->render() !!}
			</div>
			

		</div>
	</div>

@endsection