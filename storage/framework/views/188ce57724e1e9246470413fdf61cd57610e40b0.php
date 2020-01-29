<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
      	<?php $__currentLoopData = $poster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-6">
				<div class="card card-chart">
					<div class="card-header card-header-success">
						<a href="/show/<?php echo e($posters->id); ?>"><img src="<?php echo e($posters->filename); ?>" alt="" width="450" height="300"></a>
					</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo e($posters->title); ?></h4>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>			
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Beranda')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>