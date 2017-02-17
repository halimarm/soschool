@extends('layout.admin.master')

@section('title', 'Admin User')

@section('content')

	<div id="content">
		<div class="title">Admin <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				<div class="ui segment">
				<a href="{{ route('admin.tambah') }}" class="ui button primary right floated"><i class="add icon"></i>Tambah Admin</a>
					<form>
						<div class="fields">
							<div class="ui action input">
								<input type="text" name="search" placeholder="Pencarian">
								<button class="ui button">Cari</button>
							</div>
						</div>
					</form>
				</div>
				@if (Session::has('tambah-admin'))
					<div class="ui positive message">
						<i class="close icon"></i>
							{{ Session::get('tambah-admin') }}
					</div>
				@endif
				@if (Session::has('delete-admin'))
					<div class="ui positive message">
						<i class="close icon"></i>
							{{ Session::get('delete-admin') }}
					</div>
				@endif
				<div class="ui segment">
					
				<!-- content -->
				<table class="ui very basic celled padded table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Username</th>
							<th>Password</th>
							<th>Tanggal Mendaftar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

					@foreach ($admins as $admin) 

						<tr>
							<td>{{ $admin->id }}</td>
							<td class="single line">
								<h4 class="ui image header">
									
									<div class="content">
										<a href="">{{ $admin->nama }}</a>
										<div class="sub header">{{ $admin->username }}</div>
									</div>
								</h4>
							</td>
							<td>{{ $admin->email }}</td>
							<td>{{ $admin->username }}</td>
							<td>
								<a class="ui icon tiny button" href="{{ route('admin.gantipass') }}"><i class="lock icon"></i>Ganti Password</a>
							</td>
							<td>{{ Carbon\Carbon::now() }}</td>
							<td>
								<!-- <div class="ui small basic icon buttons">
									<a class="ui icon button" href="{{ route('admin.member.detail', $admin->username) }}"><i class="unhide icon"></i></a>
								</div> -->
								<!-- <div class="ui small basic icon buttons">
									<a class="ui icon button" href=""><i class="edit icon"></i></a>
								</div> -->
								<form class="ui small basic icon buttons" action="{{ route('admin.hapus', ['id' => $admin->id]) }}" method="post">

									<button type="submit" class="ui icon button" href=""><i class="close icon"></i></button>
									{{ csrf_field() }}
								</form>
							</td>
						</tr>

					@endforeach
					</tbody>
				</table>
				<!-- end -->

				</div>
			</div>
			

		</div>
	</div>

@endsection