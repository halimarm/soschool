{{-- <h4>
<a href="{{ route('profil.index', ['username' => $user->username]) }}">
{{ $user->getNamaOrUsername() }}</a> 
<br>

@if ($user->kelas_jurusan)
<small>{{ $user->kelas_jurusan }}</small>
@endif
</h4> --}}
<style type="text/css">
	.ui.minis.image{width: 50px;}
</style>
<div class="ui items">

	@foreach ($users as $user)

		<div class="item">
			<a class="ui minis image"><img src="/assets/uploads/user/{{ $user->avatar }}"></a>
			<div class="content">
				<a href="{{ route('profil.index', ['username' => $user->username]) }}" class="header">{{ $user->getNamaOrUsername() }}</a>
				<div class="description">
					<p>
						@if ($user->kelas_jurusan)
							{{ $user->kelas_jurusan }}
						@endif
					</p>
				</div>
			</div>
		</div>

	@endforeach

</div>