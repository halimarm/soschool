						
					<div class="ui card">
						<div class="content title">
							<div class="right floated">
								@if (Auth::user()->id == $status->user_id)
									<div class="ui inline dropdown right floated">
											<i class="angle down icon"></i>
											<div class="menu">
												<!-- <a class="item" href="{{ route('status.edit') }}">
													<button class="del"><i class="write icon"></i>Edit</button>
												</a> -->
												<div class="item">
													
													<form action="{{ route('status.hapus', ['statusId' => $status->id]) }}" method="post">
														<button onclick="return confirm ('Apakah Anda Yakin ingin menghapus status ini?')" class="del"><i class="close icon"></i>Hapus</button>
														{{ csrf_field() }}
													</form>
												
												</div>
											</div>
									</div>

									
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