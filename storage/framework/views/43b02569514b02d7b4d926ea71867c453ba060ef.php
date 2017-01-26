<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui container" id="about">
		<div class="ui grid container" id="main">
			<div class="sixteen wide mobile six wide tablet four wide computer column" >
				
				<div class="profil">
					<img class="ui medium rounded image" src="/assets/uploads/user/<?php echo e($user->avatar); ?>">
					<h4><a href="<?php echo e(route('profil.index', ['username' => $user->username])); ?>">
						<?php echo e($user->getNamaOrUsername()); ?>

					</a></h4>
					<p><span><?php echo e($user->status); ?> / <?php echo e($user->kelas_jurusan); ?></span></p>
					<!-- <p><span>Jl. Alkmar, Martopuro Purwosari - Pasuruan</span></p> -->
					<!-- <button class="ui primary basic button">Edit Profil</button> -->
				</div>
			</div>
			<div class="sixteen wide mobile ten wide tablet twelve wide computer column">
				<div class="about">
					<h4><i class="info circle icon"></i>Informasi Lengkap</h4><br>
					<div class="ui grid">
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							<p><i class="at icon"></i>Nama Lengkap : <span><?php echo e($user->getNamaLengkap()); ?></span></p>
							<p><i class="user icon"></i>Jenis Kelamin : <span><?php echo e($user->jenis_kelamin); ?></span></p>
							<p><i class="user icon"></i>Kelas Jurusan : <span><?php echo e($user->kelas_jurusan); ?></span></p>
							<p><i class="user icon"></i>Status : <span><?php echo e($user->status); ?></span></p>

						</div>
						<div class="sixteen wide mobile eight wide tablet eight wide computer column">
							<p><i class="whatsapp icon"></i>Hp/Whatsapp : <span><?php echo e($user->no_hp); ?></span></p>
							<p><i class="calendar outline icon"></i>Tanggal Lahir : <span><?php echo e($user->tanggal_lahir); ?></span></p>
							<p><i class="home icon"></i>Alamat Lengkap : <span><?php echo e($user->alamat); ?></span></p>
							<p><i class="mail icon"></i>Email : <span><?php echo e($user->email); ?></span></p>
							
						</div>
					</div>
				</div>

				<h4><i class="send icon"></i>Kiriman <?php echo e($user->getNamaLengkap()); ?></h4>

				

				<?php if(!$statuses->count()): ?>
					<p><?php echo e($user->getNamaDepanOrUsername()); ?> Tidak mengirim status apapun</p>

				<?php else: ?>
				
					<?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						
						<?php echo $__env->make('user/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

				<?php endif; ?>


	

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>