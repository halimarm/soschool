<!DOCTYPE html>
<html>
<head>
	<title>E-learning | @yield('title')</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
	<style type="text/css">
	.ui.menu {
		margin: 0em !important;
		margin-bottom: 25px !important;
		border-radius: 0px;
		border:transparent;
	}
	.ui.menu:not(.secondary):not(.text):not(.tabular):not(.borderless)>.container>.item:not(.right):not(.borderless):first-child {
		border:transparent;
	}
	.ui.inverted.button {
		color: #555 !important;
	}

	.ui.menu .item.logo {
		background-color:#3DB6FD;
		color:#fff;
		font-size: 15px;
	}
	.ui.menu .item.logo:hover {
		background-color:#3DB6FD;
		color:#fff;
	}

	.ui.menu .item {
		font-weight: bold;
		padding: 1.1em 1.14285714em;
	}
	.ui.menu .item:before {
		background: transparent;
	}
	.ui.menu .item:hover {
		
	}
	.masthead h1.ui.header {
		margin-top: 30%;
		font-size: 4em;
	}
	.masthead .login.ui.header {
		margin-top: 30%;
		/*font-size: 4em;*/
	}
	.masthead .link.ui.header {
		position: absolute;
		bottom: 1em;
		font-size: 1em;
	}
	.masthead .spacing.ui.header {
		letter-spacing: 0.2em;
	}
	.ui.vertical.stripe {
		padding: 8em 0em;
	}
	.ui.inverted.button {
		color: #555 !important;
	}
	.ui.form .field .ui.input {
		width: auto !important;
	}
	.ui.green.button, .ui.green.buttons .button {
		background-color: #00b29c;
	}
	.ui.green.button:hover, .ui.green.buttons .button:hover {
		background-color: #01ab96;
	}

</style>
</head>
<body>

@yield('content')

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/semantic.min.js"></script>
<script type="text/javascript">
$('.ui .dropdown').dropdown();
</script>
</body>
</html>