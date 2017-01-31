<?php if(Session::has('info')): ?>
	<div class="ui negative message">
		<i class="close icon"></i>
			<?php echo e(Session::get('info')); ?>

	</div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
	<div class="ui negative message">
		<i class="close icon"></i>
			<?php echo e(Session::get('error')); ?>

	</div>
<?php endif; ?>

<?php if(Session::has('sukses')): ?>
	<div class="ui page active dimmer">
		<div class="content">
			<div class="center">
				<h2 class="ui inverted icon header">
					<i class="checkmark icon"></i>
					Anda Telah Terdaftar, Silahkan Login!
				</h2>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if(Session::has('info-update')): ?>
	<div class="ui positive message">
		<i class="close icon"></i>
			<?php echo e(Session::get('info-update')); ?>

	</div>
<?php endif; ?>