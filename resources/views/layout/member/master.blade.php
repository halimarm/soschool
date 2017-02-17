
@if (Auth::check())

<!DOCTYPE html>
<html>
<head>
	<title>SOSCHOOL | @yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/calendar.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<style type="text/css">
	
	</style>
</head>
<body>
<div class="ui menu">
	<div class="ui container">

		<a class="item logo" href="{{ route('beranda') }}"><b>SOSCHOOL</b></a>
		<a class="item" href="{{ route('beranda') }}"><i class="home icon"></i>Beranda</a>
		<a class="item" href="{{ route('profil.index', ['username' => Auth::user()->username]) }}"><i class="user icon"></i>Profil</a>
		<a class="item" href="{{ route('berkas') }}"><i class="file icon"></i>Berkas</a>

		@if (Auth::user()->jabatan == 'Guru')
		

		<div class="ui dropdown item">
			<i class="settings icon"></i>Master
			<div class="menu" style="font-size:14px;">
				<a href="{{ route('berkas') }}" class="item"><i class="upload icon"></i>Upload Berkas</a>
				<a href="{{ route('member') }}" class="item"><i class="users icon"></i>Data Member</a>
			</div>
  		</div>

		@endif

		<!-- <a class="item" href="#"><i class="icon write"></i>Materi</a> -->
		<!-- <a class="item" href="#"><i class="icon book"></i>Tugas</a> -->
		<!-- <a class="item" href="pesan" data-inverted="" data-tooltip="Kirim Pesan" data-position="bottom center"><i class="mail icon"></i>Pesan</a> -->
		<!-- <a class="item" href="download_tugas" data-inverted="" data-tooltip="Download/Upload Tugas" data-position="bottom center"><i class="write icon"></i>Tugas</a> -->
		<div class="ui right menu">

			<!-- <form action="{{ route('search.results') }}" class="ui transparent icon input form-search">
				<input type="text" name="query" placeholder="Pencarian">
				<i class="search icon"></i>
			</form> -->
			<form class="ui search item form-seacrh" action="{{ route('search.results') }}">
				<div class="ui icon input">
					<input type="text" name="query" class="prompt" placeholder="Pencarian">
					<i class="search icon"></i>
				</div>
				<div class="results"></div>
			</form>

			<!-- <div class="item">
				<a class="ui basic button" href="{{ route('beranda') }}"><i class="write icon"></i>Status</a>
			</div> -->
			<!-- <a href="" class="item" data-inverted="" data-tooltip="Kalender" data-position="bottom center"><i class="calendar outline icon"></i></a> -->

			<div class="item">
				<a class="circular ui basic icon button tulis" data-tooltip="Tulis Informasi" data-position="bottom center">
					<i class="write icon"></i>
				</a>
			</div>


			<!-- <div class="ui menu"> -->
				<div class="ui dropdown item" href="/beranda">
					<img class="ui avatar image" src="/assets/uploads/user/{{ Auth::user()->avatar }}">
					<div class="content">
						<!-- models/user -->
						<div class="ui sub header">{{ Auth::user()->getUsername() }}</div>
						<small>{{ Auth::user()->jabatan }}</small>
					</div>
					<div class="menu">
						<a href="{{ route('profil.edit') }}" class="item"><i class="edit icon"></i>Edit Profil</a>
						<a href="{{ route('logout') }}" class="item"><i class="log out icon"></i>Keluar</a>
					</div>
  				</div>
			<!-- </div> -->

		</div>
	</div>
</div>


@yield('content')


<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/semantic.min.js"></script>
<script type="text/javascript" src="/assets/js/calendar.min.js"></script>
<script type="text/javascript">

	$('.ui .dropdown').dropdown();

	$('.item .tulis').click(function(){
		$('.small.modal').modal({
			blurring: true
		}).modal('show');
	});


	$('.actions .hideKomentar').click(function() {
		$('.showKomentar').toggle();
	});

	$('.ui.medium.rounded.image.upload').dimmer({
		on: 'hover'
	});
	// end
	$('.message .close').on('click', function(){
		$(this).closest('.message').transition('fade');
	});
	$('.page').dimmer('toggle');

	// kelnder
	$('#calendar').calendar({
		type: 'date',
		inline: true
	});
	// $('#tanggal').calendar({
	// 	type: 'date'
	// });
	
</script>
<script type="text/javascript">
	$(document).ready(function(){
		jQuery.each(jQuery('textarea[data-autoresize]'), function() {
		    var offset = this.offsetHeight - this.clientHeight;
		 
		    var resizeTextarea = function(el) {
		        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
		    };
		    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
		});
	});

</script>
</body>
</html>

@endif