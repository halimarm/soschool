<?php $__env->startSection('title', 'Seach Result'); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="ui container">
		<h4>Pencarian "<?php echo e(Request::input('query')); ?>"</h4>

	<?php if(!$users->count()): ?>

		<p>User tidak ditemukan</p>

	<?php else: ?>

		
		<?php echo $__env->make('user/user-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


	<?php endif; ?>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>