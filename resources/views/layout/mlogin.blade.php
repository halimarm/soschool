<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<style type="text/css">

		.bg-left {
			/*background-color: #3498db;*/
			background: url(/assets/img/3s.png) center no-repeat;
			background-size: cover;
			opacity: .9;
			height:100vh !important;
			color: #fff;

		}

		.bgcolor {
			background-color: #fff;
			padding: 0px !important;
		}

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
		.logo h3 {
			font-size: 20px;
			letter-spacing: 3px;
			padding-top: 3%;
			padding-left: 7%;
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
			background: url(/assets/img/bg.jpg) center no-repeat;
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
		.headings h1 {
			font-size: 4em;
			font-weight: 100;
			letter-spacing: 3px;
			
		}
		.headings h3 {
			font-weight: 100;
			letter-spacing: 10px;

		}
		.headings {
			padding-left: 7%;
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