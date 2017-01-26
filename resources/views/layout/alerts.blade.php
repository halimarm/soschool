@if (Session::has('info'))
	<div class="ui alerts">
		{{ Session::get('info') }}
	</div>
@endif