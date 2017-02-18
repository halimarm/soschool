				@foreach ($status->replies as $balas)
					<div class="content komentar">
						<div class="right floated">
							@if (Auth::user()->id == $balas->user_id)
								<form action="{{ route('komentar.hapus', ['balasId' => $balas->id]) }}" method="post">
									<button class="del"><i class="close icon"></i></button>
									{{ csrf_field() }}
								</form>
							@endif
						</div>
						<a href="{{ route('profil.index', ['username' => $balas->user->username]) }}"><img class="ui avatar image" src="/assets/uploads/user/{{ $balas->user->avatar }}"><b>{{ $balas->user->getNamaOrUsername() }}</b></a><span class="date meta">{{ $balas->created_at->diffForHumans() }}</span>
						<p>{{ $balas->body }}</p>
					</div>
				@endforeach
					<div class="extra content">
						<form class="ui large transparent left icon input" action="{{ route('status.balas', ['statusId' => $status->id]) }}" method="post">
							<i class="talk outline icon"></i>
							<input type="text" data-autoresize rows="1" name="balas-{{ $status->id }}" placeholder="Komentar">
							{{ csrf_field() }}
						</form>
					</div>