{{-- <div class="ui long modal">
	<i class="close icon"></i>
	<div class="header">
		Kiriman Abd Halim Arumman
	</div>
	<div class="image content">
		<div class="ui tiny image">
			<img src="../assets/uploads/user/no-photo.png">
		</div>
		<div class="description">
			<div class="ui comments">
				<div class="comment">
					<div class="content">
						<a href="{{ route('profil.index', ['username' => $status->user->username]) }}" class="author">{{ $status->user->getNamaOrUsername() }}</a>
						<div class="metadata">
							<span class="date">{{ $status->created_at->diffForHumans() }}</span>
						</div>
						<div class="text">
							{{ $status->body }}
						</div>
						<div class="actions">
							<a class="save">
								<i class="thumbs outline up icon"></i>8 Suka
							</a>
							<a id="modal">
								<i class="comment outline icon"></i>
								12 Komentar
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="actions komentar">
		@include('user.komentar')
		@include('user.form-komentar')

	</div>
</div> --}}