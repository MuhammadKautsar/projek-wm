<!DOCTYPE html>
<html>
<head>
	<title>Show by id</title>
</head>
<body>
	<section id="images">
		<div class="container">
			<div class="row">
				<?php $__currentLoopData = $poster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="<?php echo e(asset($posters->filename)); ?>" alt="" width="450" height="300">
							<div class="caption">
								<h3><?php echo e($posters->title); ?></h3>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
</body>
</html>