<?php $__env->startSection('title', 'Profil Edit'); ?>

<?php $__env->startSection('content'); ?>

<style type="text/css">
	.form-upload > input.upload {
		display: none;
	}
	.form-upload small {
		color: #74b9ff;
		font-size: 17px;
	}
	.ui.form .field>label {
		color: #444;
	}
</style>

	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				<div class="profil">
					<div class="ui medium rounded image upload">
						<div class="ui inverted dimmer">
							<div class="content">
								<div class="center">
									<form class="form-upload" action="<?php echo e(route('profil.avatar')); ?>" enctype="multipart/form-data" method="post">
										<label for="file-input">
											<h1>
												<i class="upload icon large" style="margin-left:8px!important;cursor: pointer;"></i><br> <small>Upload Profil</small>
												</h1>
										</label>

										<input id="file-input" class="upload" type="file" name="avatar" onchange="javascript:this.form.submit();">
										
										<?php echo e(csrf_field()); ?>

									</form>
								</div>
							</div>
						</div>
						<img class="ui image" src="/assets/uploads/user/<?php echo e(Auth::user()->avatar); ?>">
					</div>
					<h4>
						<?php echo e(Auth::user()->getNamaLengkap()); ?>

					</h4>
					<p><span>Siswa / 12 RPL</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">

				<div class="about">
					<h4><i class="info circle icon"></i>Edit Informasi Lengkap</h4>
					<?php echo $__env->make('layout.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><br>
					<form class="ui grid form" action="<?php echo e(route('profil.edit')); ?>" method="post">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							
							<div class="field">
								<label><i class="at icon"></i>Nama Depan : </label>
								<input type="text" name="nama_depan" value="<?php echo e(Request::old('nama_depan') ?: Auth::user()->nama_depan); ?>">
								<?php if($errors->has('nama_depan')): ?>
									<br><small><?php echo e($errors->first('nama_depan')); ?> </small>
								<?php endif; ?>
							</div>
							<div class="field">
								<label><i class="at icon"></i>Nama Belakang : </label>
								<input type="text" name="nama_belakang" value="<?php echo e(Request::old('nama_belakang') ?: Auth::user()->nama_belakang); ?>">
								<?php if($errors->has('nama_belakang')): ?>
									<br><small><?php echo e($errors->first('nama_belakang')); ?> </small>
								<?php endif; ?>
							</div>

							<div class="field">
								<label><i class="user icon"></i>Jenis Kelamin : </label>
								<div class="ui selection dropdown">
									<input type="hidden" name="jenis_kelamin">
									<i class="dropdown icon"></i>
									<div class="default text" name="jenis_kelamin"><?php echo e(Request::old('jenis_kelamin') ?: Auth::user()->jenis_kelamin); ?></div>
									<div class="menu">
										<div class="item" name="jenis_kelamin" value="Laki-Laki" >Laki-Laki</div>
										<div class="item" name="jenis_kelamin" value="Perempuan">Perempuan</div>
									</div>
								</div>
								<?php if($errors->has('jenis_kelamin')): ?>
									<br><small><?php echo e($errors->first('jenis_kelamin')); ?> </small>
								<?php endif; ?>
							</div>

							<div class="field">
								<label><i class="hashtag icon"></i>Kelas Jurusan : </label>
								<input type="text" name="kelas_jurusan" value="<?php echo e(Request::old('kelas_jurusan') ?: Auth::user()->kelas_jurusan); ?>">
								<?php if($errors->has('kelas_jurusan')): ?>
									<br><small><?php echo e($errors->first('kelas_jurusan')); ?> </small>
								<?php endif; ?>
							</div>

							<div class="field">
								<label><i class="tag icon"></i>Status : </label>
								<div class="ui selection dropdown">
									<input type="hidden" name="status">
									<i class="dropdown icon"></i>
									<div class="default text" name="status"><?php echo e(Request::old('status') ?: Auth::user()->status); ?></div>
									<div class="menu">
										<div class="item" name="status" value="<?php echo e(Request::old('status') ?: Auth::user()->status); ?>" data-value="<?php echo e(Request::old('status') ?: Auth::user()->status); ?>"><?php echo e(Request::old('status') ?: Auth::user()->status); ?></div>
										
									</div>
								</div>
							</div>
							
							
						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							
							<div class="field">
								<label><i class="whatsapp icon"></i>Hp/Whatsapp : </label>
								<input type="text" name="no_hp" value="<?php echo e(Request::old('no_hp') ?: Auth::user()->no_hp); ?>">
							</div>
							<div class="field">
								<label><i class="calendar outline icon"></i>Tanggal Lahir : </label>
								<input type="date" data-date-format="DD MM YYYY" name="tanggal_lahir" value="<?php echo e(Request::old('tanggal_lahir') ?: Auth::user()->tanggal_lahir); ?>">
								<?php if($errors->has('tanggal_lahir')): ?>
									<br><small><?php echo e($errors->first('tanggal_lahir')); ?> </small>
								<?php endif; ?>
							</div>
							<div class="field">
								<label><i class="home icon"></i>Alamat Lengkap : </label>
								<input type="text" name="alamat" value="<?php echo e(Request::old('alamat') ?: Auth::user()->alamat); ?>">
								<?php if($errors->has('alamat')): ?>
									<br><small><?php echo e($errors->first('alamat')); ?> </small>
								<?php endif; ?>
							</div>
							<div class="field">
								<label><i class="mail icon"></i>Email : </label>
								<input type="text" name="email" value="<?php echo e(Request::old('email') ?: Auth::user()->email); ?>">
								<?php if($errors->has('email')): ?>
									<br><small><?php echo e($errors->first('email')); ?> </small>
								<?php endif; ?>
							</div>
							
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