<?php $__env->startSection('title', 'Login Member'); ?>

<?php $__env->startSection('content'); ?>
	<div class="ui middle aligned center aligned grid">
		<div class="column">
			
			<form class="ui large form" action="/beranda">
				<div class="ui segment">
					<h2 class="ui image header">
			<!-- <img src="assets/images/logo.png" class="image"> -->
						<div class="content">.:: Login Member ::.</div>
					</h2>
					<div class="field">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="email" placeholder="Username"></div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="password" placeholder="Password"></div>
					</div>
					<div class="field"> 
						<button class="ui fluid large blue submit button">Login</button>
					</div>
					<p>Tidak Mempunyai Akun? &nbsp; <a href="daftar">Daftar</a></p> 
	 			</div>
				<div class="ui error message"></div>
				
			</form>
			
			
		</div>
	</div>
	<p class="copy">Copyright &copy; <a href="http://smkn1purwosari.sch.id">SMKN 1 PURWOSARI</a> 2016 - All Rigths Reserved</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mlogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>