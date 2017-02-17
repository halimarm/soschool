						
					<div class="ui card">
						<div class="content title">
							<div class="right floated">
								@if (Auth::user()->id == $status->user_id)
									<form action="{{ route('status.hapus', ['statusId' => $status->id]) }}" method="post">
										<button class="del"><i class="close icon"></i></button>
										{{ csrf_field() }}
								</form>
								@endif
							</div>
							<a href="{{ route('profil.index', ['username' => $status->user->username]) }}"><img class="ui avatar image" src="/assets/uploads/user/{{ $status->user->avatar }}">{{ $status->user->getNamaOrUsername() }}</a>
							<span class="date meta">{{ $status->waktu()->diffForHumans() }}</span>
						</div>
						<div class="content status">
							{{ $status->body }}
						</div>
						<div class="content panel-komentar">

							@if ($status->user->id)
								<span><i class="thumbs up icon"></i><a href="{{ route('status.suka', ['statusId' => $status->id]) }}">{{ $status->likes->count() }} Suka</a></span>
							@endif

							<span><i class="comment icon"></i>{{ $status->replies->count() }} Komentar</span>
						</div>

				
						@include('user/komentar')
				
					</div>