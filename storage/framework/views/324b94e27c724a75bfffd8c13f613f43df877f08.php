<?php $__env->startSection('title', 'Selamat Datang'); ?>

<?php $__env->startSection('content'); ?>
	<!-- main -->
	<div class="ui grid container" id="main">
		<div class="sixteen wide mobile ten wide tablet eleven wide computer column">
			<div class="ui segment">
				<p><i class="icon announcement"></i><b>Dinding Informasi</b></p>
			</div>
			<div class="ui padded segment">
				<form class="ui komentar form">
					<div class="field">
						<textarea rows="3" placeholder="Tulis Informasi"></textarea>
					</div>
					<div class="ui blue right labeled small submit icon button">
						<i class="icon send"></i> Kirim
					</div>
				</form>
			</div>
			<div class="ui padded segment">
				<div class="ui threaded comments">
					<div class="comment">
						<a class="avatar"><img src="../assets/uploads/user/no-photo.png"></a>
						<div class="content">
							<a class="author">Raditya Wahyu</a>
							<div class="metadata">
								<span class="date">1 Jam yang lalu</span>
							</div>
							<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							<!-- <div class="actions">
								<a class="komentar"><i class="comment icon"></i> Komentar</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="ui padded segment">
				<div class="ui threaded comments">
					<div class="comment">
						<a class="avatar"><img src="../assets/uploads/user/no-photo.png"></a>
						<div class="content">
							<a class="author">Raditya Wahyu</a>
							<div class="metadata">
								<span class="date">1 Jam yang lalu</span>
							</div>
							<div class="text">[Deadline] Tugas akhir dikumpulkan hari sabtu 26 November 2016 !</div>
							<!-- <div class="actions">
								<a class="komentar"><i class="comment icon"></i> Komentar</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			

		</div>
		<div class="sixteen wide mobile six wide tablet five wide computer column">
			<div class="ui vertical menu">
				<div class="item active">
					<i class="world icon"></i>
					<b>Aktifitas</b>
				</div>
				<div style="overflow-y:scroll;max-height: 500px;">
					<a class="item">
					<h5 class="ui image header">
						<img src="../assets/uploads/user/no-photo.png" class="ui mini rounded image">
						<div class="content">
							<div class="header">Abd Halim Arumman</div>
							<small>Upload tugas 8 menit yang lalu</small>
						</div>
					</h5>
					<!-- <div class="ui teal label">1</div> -->
					</a>
					<a class="item">
						<h5 class="ui image header">
							<img src="../assets/uploads/user/no-photo.png" class="ui mini rounded image">
							<div class="content">
								<div class="header">Wikan Abdillah</div>
								<small>Upload tugas 21 menit yang lalu</small>
							</div>
						</h5>
						<!-- <div class="ui teal label">1</div> -->
					</a>
					<a class="item">
						<h5 class="ui image header">
							<img src="../assets/uploads/user/no-photo.png" class="ui mini rounded image">
							<div class="content">
								<div class="header">Khisan Ihza</div>
								<small>Upload tugas 30 menit yang lalu</small>
							</div>
						</h5>
					</a>
					<a class="item">
						<h5 class="ui image header">
							<img src="../assets/uploads/user/no-photo.png" class="ui mini rounded image">
							<div class="content">
								<div class="header">M Wildan</div>
								<small>Upload tugas 45 menit yang lalu</small>
							</div>
						</h5>
					</a>
					<a class="item">
						<h5 class="ui image header">
							<img src="../assets/uploads/user/no-photo.png" class="ui mini rounded image">
							<div class="content">
								<div class="header">Muhammad Ulum</div>
								<small>Upload tugas 1 jam yang lalu</small>
							</div>
						</h5>
					</a>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>