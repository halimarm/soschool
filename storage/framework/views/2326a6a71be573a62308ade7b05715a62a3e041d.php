						<style type="text/css">
							.ui.threaded.comments .comment .comments {box-shadow: none;}
							/*.ui.comments .comment>.avatar~.content{border-bottom: 1px solid #f1f1f1;padding-bottom: 20px;}*/
						</style>
						<div class="ui padded segment">
							<div class="ui threaded comments">
								<div class="ui comments">
									<div class="comment">
										<a class="avatar">
											<img src="/assets/uploads/user/<?php echo e($status->user->avatar); ?>">
										</a>
										<div class="content">
											<a href="
											<?php echo e(route('profil.index', ['username' => $status->user->username])); ?>

											" class="author"><?php echo e($status->user->getNamaOrUsername()); ?></a>
											<div class="metadata">
												
												<span class="date"><?php echo e($status->waktu()->diffForHumans()); ?></span>
											</div>
											<div class="text">
												<?php echo e($status->body); ?>

											</div>
											<div class="actions">
												<?php if($status->user->id): ?>
													<a href="<?php echo e(route('status.suka', ['statusId' => $status->id])); ?>" class="save">
														<i class="thumbs outline up icon"></i><?php echo e($status->likes->count()); ?> Suka
													</a>
												<?php endif; ?>
												<a id="showKomentar">
													<i class="comment outline icon"></i>
													 Komentar
												</a>
											</div>
										</div>
										<?php echo $__env->make('user/komentar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									</div>
								</div>
							</div>
						</div>