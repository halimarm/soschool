<?php $__env->startSection('title', 'Daftar Member'); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<div class="ui grid container">
		<div class="sixteen wide column">
			<form class="ui form" action="<?php echo e(route('daftar')); ?>" method="POST">
				<h3 class="ui header text center aligned">Daftar Member</h3><br>
				<div class="ui grid">
					<div class="sixteen wide mobile eight wide tablet eight wide computer column">
						<h4 class="ui dividing header">Informasi Login</h4>
						<div class="required field">
							<label>Username</label>
							<input type="text" placeholder="Username" name="username" value="<?php echo e(old('username')); ?>">
							<?php if($errors->has('username')): ?>
								<small><?php echo e($errors->first('username')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Password</label>
							<input type="password" placeholder="Password" name="password">
							<?php if($errors->has('password')): ?>
								<small><?php echo e($errors->first('password')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Konfirmasi Password</label>
							<input type="password" placeholder="password" name="password2">
							<?php if($errors->has('password')): ?>
								<small><?php echo e($errors->first('password')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Email</label>
							<input type="email" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
							<?php if($errors->has('email')): ?>
								<small><?php echo e($errors->first('email')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Status</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="status">
								<i class="dropdown icon"></i>
								<div class="default text">Status</div>
								<div class="menu">
									<div class="item" name="status" value="Siswa" data-value="Siswa">Siswa</div>
									<div class="item" name="status" value="Guru" data-value="Guru">Guru</div>
								</div>
							</div>
							<?php if($errors->has('status')): ?>
								<small><?php echo e($errors->first('status')); ?> </small>
							<?php endif; ?>
						</div>
					</div>
					<div class="sixteen wide mobile eight wide tablet eight wide computer column">
								<h4 class="ui dividing header">Informasi Pribadi</h4>
						<div class="required field">
							<label>Nama Depan</label>
							<input type="text" name="nama_depan" placeholder="Nama Depan" value="<?php echo e(old('nama_depan')); ?>">
							<?php if($errors->has('nama_depan')): ?>
								<small><?php echo e($errors->first('nama_depan')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Nama Belakang</label>
							<input type="text" name="nama_belakang" placeholder="Nama Belakang" value="<?php echo e(old('nama_belakang')); ?>">
							<?php if($errors->has('nama_belakang')): ?>
								<small><?php echo e($errors->first('nama_belakang')); ?> </small>
							<?php endif; ?>
						</div>
						<div class="required field">
							<label>Jenis Kelamin</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="jenis_kelamin">
								<i class="dropdown icon"></i>
								<div class="default text">Jenis Kelamin</div>
								<div class="menu">
									<div class="item" name="jenis_kelamin" value="Laki-Laki" data-value="Laki-Laki">Laki-Laki</div>
									<div class="item" name="jenis_kelamin" value="Perempuan" data-value="Perempuan">Perempuan</div>
								</div>
							</div>
							<?php if($errors->has('jenis_kelamin')): ?>
								<small><?php echo e($errors->first('jenis_kelamin')); ?> </small>
							<?php endif; ?>
						</div>
						
						<div class="required field">
							<label>Alamat</label>
							<textarea placeholder="Alamat" name="alamat"></textarea>
							<?php if($errors->has('alamat')): ?>
								<small><?php echo e($errors->first('alamat')); ?> </small>
							<?php endif; ?>
						</div>
						<!-- mentok -->
						<div class="required inline field">
							<div class="ui checkbox">
								<input type="checkbox" tabindex="0" required>
								<label>Konfirmasi & lanjutkan</label>
							</div>
							<a href="/" class="ui button right floated basic"><i class="sign in icon"></i>Kembali untuk Login</a>
							<button class="ui button right floated green"><i class="signup icon"></i>Daftar</button>
							<br><br>
						</div>
						<?php echo e(csrf_field()); ?>

					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mdaftar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>