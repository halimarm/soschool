
<?php if(Auth::check()): ?>

<!DOCTYPE html>
<html>
<head>
	<title>SOSCHOOL | <?php echo $__env->yieldContent('title'); ?></title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<style type="text/css">
	
	</style>
</head>
<body>
<div class="ui menu">
	<div class="ui container">
		<a class="item logo" href="<?php echo e(route('beranda')); ?>"><b>SOSCHOOL</b></a>
		<a class="item" href="<?php echo e(route('beranda')); ?>"><i class="home icon"></i>Beranda</a>
		<a class="item" href="<?php echo e(route('profil.index', ['username' => Auth::user()->username])); ?>"><i class="user icon"></i>Profil</a>
		
		<!-- <a class="item" href="#"><i class="icon write"></i>Materi</a> -->
		<!-- <a class="item" href="#"><i class="icon book"></i>Tugas</a> -->
		<!-- <a class="item" href="pesan" data-inverted="" data-tooltip="Kirim Pesan" data-position="bottom center"><i class="mail icon"></i>Pesan</a> -->
		<!-- <a class="item" href="download_tugas" data-inverted="" data-tooltip="Download/Upload Tugas" data-position="bottom center"><i class="write icon"></i>Tugas</a> -->
		<div class="ui right menu">

			<!-- <form action="<?php echo e(route('search.results')); ?>" class="ui transparent icon input form-search">
				<input type="text" name="query" placeholder="Pencarian">
				<i class="search icon"></i>
			</form> -->
			<form class="ui search item form-seacrh" action="<?php echo e(route('search.results')); ?>">
				<div class="ui icon input">
					<input type="text" name="query" class="prompt" placeholder="Pencarian">
					<i class="search icon"></i>
				</div>
				<div class="results"></div>
			</form>

			<!-- <a href="" class="item" data-inverted="" data-tooltip="Kalender" data-position="bottom center"><i class="calendar outline icon"></i></a> -->
			<a href="" class="item" data-inverted="" data-tooltip="Pemberitahuan" data-position="bottom center">
				<i class="alarm outline icon"></i>
			</a>
			<!-- <div class="ui menu"> -->
				<div class="ui dropdown item" href="/beranda">
					<img class="ui avatar image" src="/assets/uploads/user/<?php echo e(Auth::user()->avatar); ?>">
					<div class="content">
						<!-- models/user -->
						<div class="ui sub header"><?php echo e(Auth::user()->getUsername()); ?></div>
						<small>Siswa</small>
					</div>
					<div class="menu">
						<a href="<?php echo e(route('profil.edit')); ?>" class="item"><i class="edit icon"></i>Edit Profil</a>
						<a href="<?php echo e(route('logout')); ?>" class="item"><i class="log out icon"></i>Keluar</a>
					</div>
  				</div>
			<!-- </div> -->

		</div>
	</div>
</div>


<?php echo $__env->yieldContent('content'); ?>


<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/semantic.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.ui .dropdown').dropdown();

	// $('#modal').click(function(){
	// 	$('.ui .long.modal').modal({
	// 		blurring: true
	// 	}).modal('show');
	// });
	$('#showKomentar').click(function() {
		$('#Komentar').toggle();
	});

});

</script>

</body>
</html>

<?php endif; ?>