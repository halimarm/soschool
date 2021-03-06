<?php $__env->startSection('title', 'Login Member'); ?>

<?php $__env->startSection('content'); ?>

	<div class="ui middle aligned center aligned grid">
		<div class="column">
			
			<form class="ui large form" action="<?php echo e(route('login')); ?>" method="POST">

				<div class="ui segment">
					<h2 class="ui image header">
			<!-- <img src="assets/images/logo.png" class="image"> -->
						<div class="content">.:: Login Member ::.</div>
					</h2>
					<div class="field">
						<?php echo $__env->make('layout.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
					<div class="field <?php echo e($errors->has('username') ? 'error' : ''); ?>">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="username" placeholder="Username" value="<?php echo e(old('username')); ?>">
						</div>
							
					</div>
					<div class="field <?php echo e($errors->has('password') ? 'error' : ''); ?>">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="password" placeholder="Password"></div>
							
					</div>
					<div class="field">
						
						
					</div>
					<div class="field"> 
						<button class="ui fluid large blue submit button">Login</button>
					</div>
					<p>Tidak Mempunyai Akun? &nbsp; <a href="<?php echo e(route('daftar')); ?>">Daftar</a></p> 
	 			</div>
				<div class="ui error message"></div>
				<?php echo e(csrf_field()); ?>	
			</form>
			
			
		</div>
	</div>
	<p class="copy">Copyright &copy; <a href="http://smkn1purwosari.sch.id">SMKN 1 PURWOSARI</a> 2016 - All Rigths Reserved</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mlogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>