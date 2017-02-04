<!DOCTYPE html>
<html>
<head>
	<title>Administrator | Login</title>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/semantic.min.css">
	<style type="text/css">
		body {
			background: #19a0d9;
		}
		body > .grid {
			height: 100%;
		}
		.column {
			max-width: 400px;
		}
		.column p {
			color: #fff;
			font-weight: bold;
			font-size: 12px !important;
			letter-spacing: 0.3px !important;
		}
		.ui.segment {
			padding: 2.5em 2em;
			background-color: #f1f1f1;
			border-radius: 5px;
			border:0px;
			box-shadow: none;
		}
		.ui.teal.button, .ui.teal.buttons .button {
			background-color: rgba(53,143,204,0.93);
		}
		.ui.teal.button:hover, .ui.teal.buttons .button:hover {
			background-color: rgba(53,143,204,1);
		}
		.ui.teal.header {
			margin-bottom: 1em;
			color: rgba(53,143,204,0.93) !important;
		}

		.ui.form input[type=text],
		.ui.form input[type=password] {
			border:none;
		}
	

	</style>
</head>
<body>
<div class="ui middle aligned center aligned grid">
	<div class="column">
		
		<form class="ui large form" action="{{ route('admin.login') }}" method="post">
			<div class="ui segment">
				<h2 class="ui teal image header">
		<!-- <img src="assets/images/logo.png" class="image"> -->
					<div class="content">.:: Login Administrator ::.</div>
				</h2>
				<div class="field">
				@if (Session::has('info'))
						<div class="ui negative message">
							<i class="close icon"></i>
								{{ Session::get('info') }}
						</div>
					@endif
					<div class="ui large left icon input">
						<i class="user icon"></i>
						<input type="text" name="username" placeholder="Username"></div>
				</div>
				<div class="field">
					<div class="ui large left icon input">
						<i class="lock icon"></i>
						<input type="password" name="password" placeholder="Password"></div>
				</div>
				<button class="ui fluid large teal submit button">Login</button>
			</div>
			<div class="ui error message"></div>
			{{ csrf_field() }}
		</form>
		<p>Copyright &copy; SMKN 1 PURWOSARI 2016 - All Rights Reserved</p>
	</div>
</div>

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/semantic.min.js"></script>
<script type="text/javascript">
$('.message .close').on('click', function(){
		$(this).closest('.message').transition('fade');
	});
</script>
</body>
</html>