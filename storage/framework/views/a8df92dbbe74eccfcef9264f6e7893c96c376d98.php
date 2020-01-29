<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
		<div class="col-md-10">
			<div class="card card-chart">
				<div class="card-header card-header-success">
						<img src="<?php echo e(asset($poster->filename)); ?>" alt="" width="800" height="450">
							</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo e($poster->title); ?></h4>
					</div>
				</div>
			</div>
      </div>			
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Beranda')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>