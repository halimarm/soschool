

<?php $__env->startSection('title', 'Selamat Datang'); ?>

<?php $__env->startSection('content'); ?>

	<!-- main -->
	<div class="ui grid container" id="main">
		<div class="sixteen wide mobile ten wide tablet eleven wide computer column">
			<div class="ui segment">
				<p><i class="icon announcement"></i><b>Dinding Informasi</b></p>
			</div>
			<div class="ui padded segment">
				<!-- form status -->
				<?php echo $__env->make('beranda/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>

			
			<!-- status'e wong2 -->
			<?php if(!$statuses->count()): ?>
				<p>Tidak Ada Status</p>
			<?php else: ?>

				<?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

					<?php echo $__env->make('user/status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

				<?php echo $statuses->render(); ?>

			
			<?php endif; ?>

			<!-- modal fullscreen -->
			<?php echo $__env->make('user/modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			
		</div>

		<?php echo $__env->make('beranda/aktifitas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>