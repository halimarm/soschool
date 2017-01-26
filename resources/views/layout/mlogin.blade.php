<!DOCTYPE html>
<html>
<head>
	<title>E-learning | @yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<style type="text/css">
		body {
			background: #fff;
		}
		body > .grid {
			height: 100%;
		}
		.column {
			max-width: 430px;
		}
		p {
			color: #666;
			font-weight: bold;
			font-size: 12px !important;
			letter-spacing: 0.3px !important;
		}

		.ui.segment {
			padding: 2.5em 2em;
			background-color: transparent;
			border-radius: 5px;
			border:0px;
			box-shadow: none;
		}
		.ui.header {
			color: #777;
			margin-bottom: 1em;
		}
		.ui.blue.button {
			background-color: rgba(53,143,204,0.93);
		}
		.ui.blue.button:hover {
			background-color: rgba(53,143,204,1);
		}

		.ui.form input[type=text],
		.ui.form input[type=password] {
			border: 2px solid #f1f1f1;
			padding: 1em 0;
			font-weight: bold;
		}
		.copy {
			position: absolute;
			bottom: 20px;
			text-align: center;
			left: 0px;
			right: 0px;
		}

	</style>
</head>
<body>

@include('layout.alerts')
@yield('content')

<!-- <script type="text/javascript" src="/assets/js/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="/assets/js/semantic.min.js"></script> -->
<script type="text/javascript">

</script>
</body>
</html>