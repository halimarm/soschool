<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				
				<div class="profil">
					<img class="ui medium rounded image" src="../assets/uploads/user/no-photo.png">
					<h4><?php echo e(Auth::user()->getNamaLengkap()); ?></h4>
					<p><span>Siswa / 12 RPL</span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<button class="ui primary basic button">Edit Profil</button>
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
				<div class="about">
					<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
					<div class="ui grid">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							<p><i class="at icon"></i>Nama Lengkap : <span><?php echo e(Auth::user()->getNamaLengkap()); ?></span></p>
							<p><i class="user icon"></i>Jenis Kelamin : <span><?php echo e(Auth::user()->getJenisKelamin()); ?></span></p>
							<p><i class="calendar outline icon"></i>Tanggal Lahir : <span>24 Agustus 1998</span></p>
							<p><i class="tag icon"></i>Jabatan : <span>Siswa</span></p>
						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span>08883846180</span></p>
							<p><i class="home icon"></i>Alamat Lengkap : <span><?php echo e(Auth::user()->getAlamat()); ?></span></p>
							<p><i class="mail icon"></i>Email : <span><?php echo e(Auth::user()->getEmail()); ?></span></p>
							
						</div>
					</div>
				</div>

				<h4><i class="send icon"></i>Kiriman Abd Halim Arumman</h4>
				<div class="ui padded segment">
					<div class="ui threaded comments">
						<?php echo $__env->make('user/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
				<div class="ui padded segment">
					<div class="ui threaded comments">
						<?php echo $__env->make('user/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
				<div class="ui padded segment">
					<div class="ui threaded comments">
						<?php echo $__env->make('user/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
				<?php echo $__env->make('user/modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>