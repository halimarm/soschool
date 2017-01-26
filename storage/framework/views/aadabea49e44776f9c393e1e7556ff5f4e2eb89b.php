
<style type="text/css">
	.ui.minis.image{width: 50px;}
</style>
<div class="ui items">

	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

		<div class="item">
			<a class="ui minis image"><img src="/assets/uploads/user/<?php echo e($user->avatar); ?>"></a>
			<div class="content">
				<a href="<?php echo e(route('profil.index', ['username' => $user->username])); ?>" class="header"><?php echo e($user->getNamaOrUsername()); ?></a>
				<div class="description">
					<p>
						<?php if($user->kelas_jurusan): ?>
							<?php echo e($user->kelas_jurusan); ?>

						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</div>