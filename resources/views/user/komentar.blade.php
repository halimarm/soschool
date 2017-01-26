				<div class="comments" id="Komentar">
					<div class="comment">
						@foreach ($status->replies as $balas)
							<a class="avatar"><img src="/assets/uploads/user/{{ $balas->user->avatar }}"></a>
							<div class="content">
								<a href="{{ route('profil.index', ['username' => $balas->user->username]) }}" class="author">{{ $balas->user->getNamaOrUsername() }}</a>
								<div class="metadata">
									<span class="date">{{ $balas->created_at->diffForHumans() }}</span>
								</div>
								<div class="text">{{ $balas->body }}</div>
								<div class="actions">
									<!-- <a class="hapus">hapus</a> -->
								</div>
							</div>
						@endforeach
						<form action="{{ route('status.balas', ['statusId' => $status->id]) }}" method="post" class="ui komentar form">
							<div class="field">
								<textarea rows="2" name="balas-{{ $status->id }}" placeholder="Balas komentar"></textarea>
							</div>
							<input type="submit" name="balas" value="Balas" class="ui blue small submit icon button">
							{{ csrf_field() }}
						</form>
					</div>
				</div>