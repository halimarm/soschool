				<form action="<?php echo e(route('status.post')); ?>" method="post" class="ui komentar form">
					<div class="field">
						<textarea name="status" rows="3" placeholder="Apakabar <?php echo e(Auth::user()->getNamaLengkap()); ?>?"></textarea>
					</div>
					<input type="submit" name="kirim" value="Update Status" class="ui blue small submit icon button">
					<?php echo e(csrf_field()); ?>

				</form>