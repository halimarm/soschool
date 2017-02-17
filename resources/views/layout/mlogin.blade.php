<!DOCTYPE html>
<html>
<head>
	<title>SOSCHOOL | @yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<style type="text/css">
		.ui.green.button, .ui.green.buttons .button {
			background-color: #00b29c;
		}
		.ui.green.button:hover, .ui.green.buttons .button:hover {
			background-color: #01ab96;
		}
		.ui.segment {
			background:transparent;
			box-shadow:none;
			border: none;	
		}
		.ui.grid {
			margin: 0px !important;
		}
		.desc {
			margin-top: 40%;
		}
		h3 {
			margin-top: 3px !important;
		}
		.ui.form {
			width: 70%;
			margin: 0px auto;
		}
		.ui.segment a {
			color: #fff;
		}
		@media only screen and (max-width: 767px) {
			.desc {
				margin-top: 30%;
			}
			.ui.form {
				width: 100%;
				margin: 0px auto;
			}
		}
		.col-login {
			position: relative;
			display: block;
			width: auto;
			z-index: 99;
		}
		.col-login:after {
			content: "";
			background: url(http://localhost/ta/assets/img/bg.jpg) center no-repeat;
			background-size: cover;
			opacity: 0.1;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			position: absolute;
			z-index: -1;   
			/*background: url(http://localhost/ta/assets/img/bg.jpg);*/
		}

		.ui.form input:not([type]), .ui.form input[type=text], .ui.form input[type=email], .ui.form input[type=search], .ui.form input[type=password], .ui.form input[type=date], .ui.form input[type=datetime-local], .ui.form input[type=tel], .ui.form input[type=time], .ui.form input[type=file], .ui.form input[type=url], .ui.form input[type=number] {
			/*border: 2px solid rgba(34,36,38,.10);*/
			color: #555;
		}

	</style>
</head>
<body>


@yield('content')

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/semantic.min.js"></script>
<script type="text/javascript">
	$('.message .close').on('click', function(){
		$(this).closest('.message').transition('fade');
	});
	$('.page').dimmer('toggle');
</script>
</body>
</html>