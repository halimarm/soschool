				<div class="comments" id="Komentar">
					<div class="comment">
						<?php $__currentLoopData = $status->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<a class="avatar"><img src="/assets/uploads/user/<?php echo e($balas->user->avatar); ?>"></a>
							<div class="content">
								<a href="<?php echo e(route('profil.index', ['username' => $balas->user->username])); ?>" class="author"><?php echo e($balas->user->getNamaOrUsername()); ?></a>
								<div class="metadata">
									<span class="date"><?php echo e($balas->created_at->diffForHumans()); ?></span>
								</div>
								<div class="text"><?php echo e($balas->body); ?></div>
								<div class="actions">
									<!-- <a class="hapus">hapus</a> -->
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						<form action="<?php echo e(route('status.balas', ['statusId' => $status->id])); ?>" method="post" class="ui komentar form">
							<div class="field">
								<textarea rows="2" name="balas-<?php echo e($status->id); ?>" placeholder="Balas komentar"></textarea>
							</div>
							<input type="submit" name="balas" value="Balas" class="ui blue small submit icon button">
							<?php echo e(csrf_field()); ?>

						</form>
					</div>
				</div>