@extends('layout.member.master')

@section('title', 'Selamat Datang')

@section('content')


	<div class="ui grid text container " id="main">
		<div class="sixteen wide mobile ten wide tablet sixteen wide computer column">

				<div class="ui segment">
				@if (Session::has('ganti-status'))
                        <div class="ui positive message">
                            <i class="close icon"></i>
                            {{ session('ganti-status') }}
                        </div>
                    @endif
					<form class="ui form tulis" action="{{ route('status.edit') }}" method="post" class="ui komentar form">
						<div class="field">
							<textarea name="status" data-autoresize rows="2">{{ Request::old('body') }}</textarea>
						</div>
						<button type="submit" name="kirim" class="ui blue submit icon button"><i class="icon send"></i> Edit Status</button>
						{{ csrf_field() }}
					</form>
				</div>
			
			
		</div>

	</div>

@endsection
