@extends('layout.member.master')

@section('title', 'Profil')

@section('content')
	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				
				<div class="ui small modal">
					<i class="close icon"></i>
					<div class="header">Kirim Informasi</div>
					<div class=" content">
						@include('beranda/status')
					</div>
				</div>

				<div class="profil">
					<img class="ui medium rounded image" src="/assets/uploads/user/{{ $user->avatar }}">
					<h4><a href="{{ route('profil.index', ['username' => $user->username]) }}">
						{{ $user->getNamaOrUsername() }}
					</a></h4>
					<p><span>{{ $user->username }}</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<!-- <button class="ui primary basic button">Edit Profil</button> -->
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
				<div class="about">
					<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
					<div class="ui grid">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							<p><i class="at icon"></i>Nama Lengkap : <span>{{ $user->getNamaLengkap() }}</span></p>
							<p><i class="user icon"></i>Jenis Kelamin : <span>{{ $user->jenis_kelamin }}</span></p>
							<p><i class="hashtag icon"></i>Kelas Jurusan : <span>{{ $user->kelas_jurusan }}</span></p>
							<p><i class="tag icon"></i>Jabatan : <span>{{ $user->jabatan }}</span></p>

						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							@if (Auth::user()->jabatan == 'Guru')
							<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span>{{ $user->no_hp }}</span></p>
							@endif
							<p><i class="calendar outline icon"></i>Tanggal Lahir : <span>{{ $user->tanggal_lahir }}</span></p>
							<p><i class="home icon"></i>Alamat Lengkap : <span>{{ $user->alamat }}</span></p>
							<p><i class="mail icon"></i>Email : <span>{{ $user->email }}</span></p>
							
						</div>
					</div>
				</div>

				<h4><i class="send icon"></i>Kiriman {{ $user->getNamaLengkap() }}</h4>

				

				@if (!$statuses->count())
					<p>{{ $user->getNamaDepanOrUsername() }} Tidak mengirim status apapun</p>

				@else
				
					@foreach ($statuses as $status)
						
						@include('user/status')
						
					@endforeach

				@endif


	

			</div>
		</div>
	</div>

@endsection