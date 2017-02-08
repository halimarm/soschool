@extends('layout.admin.master')

@section('title', 'Detail Member')

@section('content')

	<div id="content">
		<div class="title">Detail Member <small>Administrator</small></div>
		<!-- <div class="sub-title">Administrator</div> -->
		<div class="ui grid ">
			<div class="eight wide mobile eight wide tablet sixteen wide computer column">
				
				<div class="ui segment">
					
					<!-- content -->
					<div class="ui grid container" style="margin:0px auto;">
						<div class="sixteen wide mobile six wide tablet four wide computer column" >
							
							<div class="profil">
								<img class="ui medium rounded image" src="/assets/uploads/user/{{ $user->avatar }}">
								
							</div>

						</div>
						<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
							<div class="about">
								<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
								<div class="ui grid">
									<div class="sixteen wide mobile eight wide tablet eight wide computer column">
										<p><i class="at icon"></i>Username : <span>{{ $user->username }}</span></p>
										<p><i class="at icon"></i>Nama Lengkap : <span>{{ $user->getNamaLengkap() }}</span></p>
										<p><i class="user icon"></i>Jenis Kelamin : <span>{{ $user->jenis_kelamin }}</span></p>
										<p><i class="hashtag icon"></i>Kelas Jurusan : <span>{{ $user->kelas_jurusan }}</span></p>
										<p><i class="tag icon"></i>Jabatan : <span></span>{{ $user->jabatan }}</p>

									</div>
									<div class="sixteen wide mobile eight wide tablet eight wide computer column">
										<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span>{{ $user->no_hp }}</span></p>
										<p><i class="calendar outline icon"></i>Tanggal Lahir : <span>{{ $user->tanggal_lahir }}</span></p>
										<p><i class="home icon"></i>Alamat Lengkap : <span>{{ $user->alamat }}</span></p>
										<p><i class="mail icon"></i>Email : <span>{{ $user->email }}</span></p>
										
									</div>
								</div>
							</div>

						</div>


					
					</div>
				</div>
				<a href="{{ route('admin.member') }}" class="ui button"><i class="left arrow icon"></i>Kembali</a>
			</div>
			

		</div>
	</div>

@endsection