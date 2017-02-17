<div class="sixteen wide mobile six wide tablet five wide computer column">
	<div class="ui segment">
		<p>Selamat Datang, <b>{{ Auth::user()->username }}</b></p>
	</div>
	<div class="ui calendar" id="calendar"></div>

	<!-- <div class="ui segment">
		<div class="ui list">

			<div class="item">
				<img class="ui avatar image" src="/assets/uploads/user/no-photo.png">
				<div class="content">
					<a class="header">Rachel</a>
					<div class="description">
						Mengirim Status <a><b></b></a> {{ Auth::user()->created_at->diffForHumans() }}
					</div>
				</div>
			</div>
			<div class="item">
				<img class="ui avatar image" src="/assets/uploads/user/no-photo.png">
				<div class="content">
					<a class="header">Rachel</a>
					<div class="description">
						Membalas Komentar <a><b></b></a> {{ Auth::user()->created_at->diffForHumans() }}
					</div>
				</div>
			</div>
			
		</div>
	</div> -->
</div>