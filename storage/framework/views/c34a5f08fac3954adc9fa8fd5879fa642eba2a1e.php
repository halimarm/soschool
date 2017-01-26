<?php $__env->startSection('title', 'Daftar Member'); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<div class="ui grid container">
		<div class="sixteen wide column">
			<form class="ui form">
				<h3 class="ui header text center aligned">Daftar Member</h3><br>
				<div class="ui grid">
					<div class="sixteen wide mobile eight wide tablet eight wide computer column">
						<h4 class="ui dividing header">Informasi Login</h4>
						<div class="required field">
							<label>Username</label>
							<input type="text" placeholder="Username" name="username">
							<small>* Username hanya diperbolehkan kombinasi antara huruf dan angka serta tanpa spasi</small>
						</div>
						<div class="required field">
							<label>Password</label>
							<input type="password" placeholder="Password" name="password">
							<small>* Password minimal 6 karakter</small>
						</div>
						<div class="required field">
							<label>Konfirmasi Password</label>
							<input type="password" placeholder="password" name="password2">
							<small>* Password minimal 6 karakter</small>
						</div>
						<div class="required field">
							<label>Email</label>
							<input type="email" placeholder="Email" name="email">
							<small>* Masukan email yang valid dan aktif.</small>
						</div>
						<div class="required field">
							<label>Jenis Member</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="jenis_member">
								<i class="dropdown icon"></i>
								<div class="default text">Jenis Member</div>
								<div class="menu">
									<div class="item" data-value="1">Siswa</div>
									<div class="item" data-value="0">Guru</div>
								</div>
							</div>
						</div>
							</div>
							<div class="sixteen wide mobile eight wide tablet eight wide computer column">
								<h4 class="ui dividing header">Informasi Pribadi</h4>
						<div class="required field">
							<label>Nama Lengkap</label>
							<input type="text" placeholder="Nama Lengkap">
						</div>
						<div class="required field">
							<label>Jenis Kelamin</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="jenis_kelamin">
								<i class="dropdown icon"></i>
								<div class="default text">Jenis Kelamin</div>
								<div class="menu">
									<div class="item" data-value="1">Laki-Laki</div>
									<div class="item" data-value="0">Perempuan</div>
								</div>
							</div>
						</div>
						<div class="required field">
							<label>Kelas Jurusan</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="kelas_jurusan">
								<i class="dropdown icon"></i>
								<div class="default text">Kelas Jurusan</div>
								<div class="menu">
									<div class="ui search icon input">
										<i class="search icon"></i>
										<input type="text" name="search" placeholder="Pencarian Kelas Jurusan">
									</div>
									<div class="divider"></div>
									<div class="header">
										<i class="tags icon"></i>
										Teknik Informatika
									</div>
									<!-- kelas 10 -->
									<div class="item">
										<div class="ui empty circular label"></div>
										10-RPL
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										10-RPL2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										10-MM
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										10-MM2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										10-TKJ
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										10-TKJ2
									</div>
									<!-- kelas 11 -->
									<div class="item">
										<div class="ui empty circular label"></div>
										11-RPL
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										11-RPL2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										11-MM
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										11-MM2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										11-TKJ
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										11-TKJ2
									</div>
									<!-- kelas 12 -->
									<div class="item">
										<div class="ui empty circular label"></div>
										12-RPL
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										12-RPL2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										12-MM
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										12-MM2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										12-TKJ
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										12-TKJ2
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										Mekatronika
									</div>
									<div class="divider"></div>
									<div class="header">
										<i class="tags icon"></i>
										Teknik Mesin
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										Teknik Permesinan
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										Body Otomotif
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										Teknik Las
									</div>
									<div class="divider"></div>
									<div class="header">
										<i class="tags icon"></i>
										Pertanian
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										TPHP
									</div>
									<div class="item">
										<div class="ui empty circular label"></div>
										ATPH
									</div>
								</div>
							</div>
						</div>
						<div class="required field">
							<label>Tanggal Lahir</label>
							<input name="daftar[tanggal_lahir]" placeholder="Nomer HP" type="date" >
						</div>
						<div class="required field">
							<label>No HP</label>
							<input name="daftar[nomer_hp]" placeholder="Nomer HP" type="number">
						</div>
						<div class="required field">
							<label>Alamat</label>
							<textarea placeholder="Alamat" name="daftar[alamat]"></textarea>
						</div>
						<!-- mentok -->
						<div class="required inline field">
							<div class="ui checkbox">
								<input type="checkbox" tabindex="0" >
								<label>Konfirmasi & lanjutkan</label>
							</div>
							<a href="/" class="ui button right floated basic"><i class="sign in icon"></i>Kembali untuk Login</a>
							<button class="ui button right floated green"><i class="signup icon"></i>Daftar</button>
							<br><br>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mdaftar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>