				<form class="ui form" action="{{ route('status.post') }}" method="post" class="ui komentar form">
					<div class="field">
						<textarea name="status" data-autoresize rows="2" placeholder="Tulis Informasi"></textarea>
					</div>
					<button type="submit" name="kirim" class="ui blue submit icon button"><i class="icon send"></i> Kirim</button>
					{{ csrf_field() }}
				</form>