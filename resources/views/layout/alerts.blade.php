@if (Session::has('info'))
	<div class="ui negative message">
		<i class="close icon"></i>
			{{ Session::get('info') }}
	</div>
@endif

@if (Session::has('error'))
	<div class="ui negative message">
		<i class="close icon"></i>
			{{ Session::get('error') }}
	</div>
@endif

@if (Session::has('sukses'))
	<div class="ui page active dimmer">
		<div class="content">
			<div class="center">
				<h2 class="ui inverted icon header">
					<i class="checkmark icon"></i>
					Anda Telah Terdaftar, Silahkan Login!
				</h2>
			</div>
		</div>
	</div>
@endif

@if (Session::has('info-update'))
	<div class="ui positive message">
		<i class="close icon"></i>
			{{ Session::get('info-update') }}
	</div>
@endif