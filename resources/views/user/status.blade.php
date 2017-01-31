						<style type="text/css">
							.ui.threaded.comments .comment .comments {box-shadow: none;}
							/*.ui.comments .comment>.avatar~.content{border-bottom: 1px solid #f1f1f1;padding-bottom: 20px;}*/
						</style>
						<div class="ui padded segment">
							<div class="ui threaded comments">
								<div class="ui comments">
									<div class="comment">
										<a class="avatar">
											<img src="/assets/uploads/user/{{ $status->user->avatar }}">
										</a>
										<div class="content">
											<a href="
											{{ route('profil.index', ['username' => $status->user->username]) }}
											" class="author">{{ $status->user->getNamaOrUsername() }}</a>
											<div class="metadata">
												{{-- <span class="date">{{ $status->created_at->diffForHumans() }}</span> --}}
												<span class="date">{{ $status->waktu()->diffForHumans() }}</span>
											</div>
											<div class="text">
												{{ $status->body }}
											</div>
											<div class="actions">
												@if ($status->user->id)
													<a href="{{ route('status.suka', ['statusId' => $status->id]) }}" class="save">
														<i class="thumbs outline up icon"></i>{{ $status->likes->count() }} Suka
													</a>
												@endif
												<a id="showKomentar">
													<i class="comment outline icon"></i>
													 Komentar
												</a>
											</div>
										</div>
										@include('user/komentar')
									</div>
								</div>
							</div>
						</div>