				<form action="{{ route('status.post') }}" method="post" class="ui komentar form">
					<div class="field">
						<textarea name="status" rows="3" placeholder="Apakabar {{ Auth::user()->getNamaLengkap() }}?"></textarea>
					</div>
					<input type="submit" name="kirim" value="Update Status" class="ui blue small submit icon button">
					{{ csrf_field() }}
				</form>