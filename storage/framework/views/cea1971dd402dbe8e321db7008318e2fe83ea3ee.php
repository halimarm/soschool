<?php $__env->startSection('title', 'Profil Edit'); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				<div class="profil">
					<img class="ui medium rounded image" src="/assets/uploads/user/<?php echo e(Auth::user()->avatar); ?>">
					<h4>
						<?php echo e(Auth::user()->getNamaLengkap()); ?>

					</h4>
					<p><span>Siswa / 12 RPL</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<form action="<?php echo e(route('profil.avatar')); ?>" enctype="multipart/form-data" method="post">
						<input type="file" name="avatar">
						<input type="submit" name="submit">
						<?php echo e(csrf_field()); ?>

					</form>
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
				<div class="about">
					<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
					<form class="ui grid" action="<?php echo e(route('profil.edit')); ?>" method="post">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							
							<p>
								<i class="at icon"></i>Nama Depan : 
								<span><input type="text" name="nama_depan" value="<?php echo e(Request::old('nama_depan') ?: Auth::user()->nama_depan); ?>"></span>
								<?php if($errors->has('nama_depan')): ?>
									<br><small><?php echo e($errors->first('nama_depan')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="at icon"></i>Nama Belakang : 
								<span><input type="text" name="nama_belakang" value="<?php echo e(Request::old('nama_belakang') ?: Auth::user()->nama_belakang); ?>"></span>
								<?php if($errors->has('nama_belakang')): ?>
									<br><small><?php echo e($errors->first('nama_belakang')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="user icon"></i>Jenis Kelamin : 
								<span><input type="text" name="jenis_kelamin" value="<?php echo e(Request::old('jenis_kelamin') ?: Auth::user()->jenis_kelamin); ?>"></span>
								<?php if($errors->has('jenis_kelamin')): ?>
									<br><small><?php echo e($errors->first('jenis_kelamin')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="mail icon"></i>Kelas Jurusan : 
								<span><input type="text" name="kelas_jurusan" value="<?php echo e(Request::old('kelas_jurusan') ?: Auth::user()->kelas_jurusan); ?>"></span>
								<?php if($errors->has('kelas_jurusan')): ?>
									<br><small><?php echo e($errors->first('kelas_jurusan')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="mail icon"></i>Status : 
								<span><input type="text" name="status" value="<?php echo e(Request::old('status') ?: Auth::user()->status); ?>"></span>
								<?php if($errors->has('status')): ?>
									<br><small><?php echo e($errors->first('status')); ?> </small>
								<?php endif; ?>
							</p>
							
							
						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							
							<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span><input type="text" name="no_hp" value="<?php echo e(Request::old('no_hp') ?: Auth::user()->no_hp); ?>"></span></p>
							<p>
								<i class="calendar outline icon"></i>Tanggal Lahir : 
								<span><input type="text" name="tanggal_lahir" value="<?php echo e(Request::old('tanggal_lahir') ?: Auth::user()->tanggal_lahir); ?>"></span>
								<?php if($errors->has('tanggal_lahir')): ?>
									<br><small><?php echo e($errors->first('tanggal_lahir')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="home icon"></i>Alamat Lengkap : 
								<span><input type="text" name="alamat" value="<?php echo e(Request::old('alamat') ?: Auth::user()->alamat); ?>"></span>
								<?php if($errors->has('alamat')): ?>
									<br><small><?php echo e($errors->first('alamat')); ?> </small>
								<?php endif; ?>
							</p>
							<p>
								<i class="mail icon"></i>Email : 
								<span><input type="text" name="email" value="<?php echo e(Request::old('email') ?: Auth::user()->email); ?>"></span>
								<?php if($errors->has('email')): ?>
									<br><small><?php echo e($errors->first('email')); ?> </small>
								<?php endif; ?>
							</p>
							
						</div>
						<input class="ui primary basic button" type="submit" name="simpan" value="Simpan">
						<?php echo e(csrf_field()); ?>

					</form>
				</div>

				
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>