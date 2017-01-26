<?php if(Session::has('info')): ?>
	<div class="ui alerts">
		<?php echo e(Session::get('info')); ?>

	</div>
<?php endif; ?>