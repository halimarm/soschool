<!DOCTYPE html>
<html>
<head>
	<title>E-learning | <?php echo $__env->yieldContent('title'); ?></title>
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
		<a class="item logo" href="index.php">E-learning</a>
		<a class="item" href="index.php"><i class="icon home"></i>Beranda</a>
		<a class="item" href="siswa.php"><i class="icon users"></i>Siswa</a>
		<a class="item" href="materi.php"><i class="icon write"></i>Materi</a>
		<a class="item" href="tugas.php"><i class="icon book"></i>Tugas</a>
		<!-- <a class="item" href="pesan.php" data-inverted="" data-tooltip="Kirim Pesan" data-position="bottom center"><i class="mail icon"></i>Pesan</a> -->
		<!-- <a class="item" href="download_tugas.php" data-inverted="" data-tooltip="Download/Upload Tugas" data-position="bottom center"><i class="write icon"></i>Tugas</a> -->
		<div class="ui right menu">
			<a href="" class="item" data-inverted="" data-tooltip="Kalender" data-position="bottom center"><i class="calendar outline icon"></i></a>
			<a href="obrolan.php" class="item" data-inverted="" data-tooltip="Obrolan" data-position="bottom center">
				<i class="comments icon"></i>
				<!-- <div class="floating ui red label circular">24</div> -->
			</a>
			<!-- <div class="ui menu"> -->
				<div class="ui dropdown item" href="index.php">
					<img class="ui avatar image" src="/assets/uploads/user/no-photo.png">
					<div class="content">
						<div class="ui sub header">radityawahyu</div>
						<small>Guru</small>
					</div>
					<div class="menu">
						<!-- <a href="#" class="item"><i class="settings icon"></i>Pengaturan</a> -->
						<a href="profil.php" class="item"><i class="user icon"></i>Profil</a>
						<a href="" class="item"><i class="help icon"></i>Bantuan</a>
						<a href="/" class="item"><i class="log out icon"></i>Keluar</a>
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
	
});

$('.ui .dropdown').dropdown();

</script>
</body>
</html>