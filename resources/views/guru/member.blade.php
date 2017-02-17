@extends('layout.member.master')

@section('title', 'Selamat Datang')

@section('content')
<style type="text/css">
	.ui.divided.items .icon {padding-right: 0px!important;}
</style>
	<!-- main -->
	<div class="ui grid container " id="main">
		<div class="sixteen wide mobile ten wide tablet sixteen wide computer column">

				<!-- <div class="ui segment"> -->
					
				<!-- content -->
				<table class="ui table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Lengkap</th>
							<th>Email</th>
							<th>Jabatan</th>
							<th>Kelas Jurusan</th>
							<th>Tanggal Mendaftar</th>
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
										<a href="{{ route('profil.index', ['username' => $user->username]) }}">{{ $user->getNamaLengkap() }}</a>
										<div class="sub header">{{ $user->username }}</div>
									</div>
								</h4>
							</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->jabatan }}</td>
							<td>{{ $user->kelas_jurusan }}</td>
							<td>{{ Carbon\Carbon::now() }}</td>
							
						</tr>

					@endforeach
					</tbody>
				</table>
				<!-- end -->

				<!-- </div> -->
			
			
		</div>

	</div>

@endsection
