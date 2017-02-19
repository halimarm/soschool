<!DOCTYPE html>
<html>
<head>
	<title>Administrator | @yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/admin.css') }}">
</head>
<body>

<div class="ui pusher">
	<div class="navbar">
		<div class="ui inverted menu">
			<div class="item logo">
				<a href=""><h3>SOSCHOOL</h3></a>
			</div>
			<div class="right menu">
				<!-- <div class="item hiden"><i class="user icon"></i>Administrator</div> -->
				<!-- <a href="login.php" class="item"><i class="log out icon"></i>Logout</a> -->
				<div class="ui dropdown item">

					<b>{{ auth('admin')->user()->nama }}</b> <i class="dropdown icon"></i>
					<div class="menu">
						<a href="{{ route('admin.user') }}" class="item"><i class="user icon"></i>Admin</a>
						<a href="{{ route('admin.logout') }}" class="item"><i class="log out icon"></i>Keluar</a>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<!-- <div class="ui left fixed vertical icon menu hiden">
		<a href="" class="item"><i class="dashboard icon"></i></a>
		<a href="" class="item"><i class="book icon"></i></a>
		<a href="" class="item"><i class="upload icon"></i></a>
		<a href="" class="item"><i class="mail icon"></i></a>
		<a href="" class="item"><i class="student icon"></i></a>
		<a href="" class="item"><i class="add icon"></i></a>
		<a href="" class="item"><i class="users icon"></i></a>
		<a href="" class="item"><i class="add icon"></i></a>
		<a href="" class="item"><i class="user icon"></i></a>
		<a href="" class="item"><i class="settings icon"></i></a>
	</div> -->

	<div class="sidebar hiden">
		<div class="ui inverted vertical menu">
			<div class="sub-title"><i class="circle icon"></i>overview</div>
			<a href="{{ route('admin.index') }}" class="item"><i class="dashboard icon"></i>Dashboard</a>
			<a href="{{ route('admin.member') }}" class="item"><i class="user icon"></i>Member</a>
			<a href="{{ route('admin.berkas') }}" class="item"><i class="user icon"></i>Berkas</a>
			<a href="{{ route('admin.status') }}" class="item"><i class="write icon"></i>Status</a>
			<a href="{{ route('admin.komentar') }}" class="item"><i class="comment icon"></i>Komentar</a>

			<div class="sub-title"><i class="circle icon"></i>Administrator</div>
			<a href="{{ route('admin.user') }}" class="item"><i class="settings icon"></i>Admin</a>
			
		</div>
	</div>

	<!-- content -->
	@yield('content')
	<!-- end -->

</div>
<script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/semantic.min.js') }}"></script>

<script type="text/javascript">
$('.ui .dropdown').dropdown();
$('.ui.sidebar')
  .sidebar('toggle')
;
$('.message .close').on('click', function(){
		$(this).closest('.message').transition('fade');
	});
</script>
</body>
</html>