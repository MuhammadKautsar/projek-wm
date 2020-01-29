<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Poster Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="row">
                  <div class="col-12 text-right">
                    <a href="/uploadfile" class="btn btn-sm btn-primary"><?php echo e(__('Add poster')); ?></a>
                  </div>
                </div>
            <div class="table-responsive">
              <table class="table">
				<thead class=" text-primary">
					<th> ID </th>
					<th> Title </th>
					<th> Filename </th>
					<th> Image </th>
					<th> Action </th>
				</thead>
				<tbody>
					<?php $__currentLoopData = $poster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th><?php echo e($posters->id); ?></th>
						<th><?php echo e($posters->title); ?></th>
						<th><?php echo e($posters->filename); ?></th>
						<th><img src="<?php echo e($posters->filename); ?>" alt="" width="100" height="100"></th>
						<th>
							<a href="/editimage/<?php echo e($posters->id); ?>" class="btn btn-success"> EDIT </a>
							<a href="/deleteimage/<?php echo e($posters->id); ?>" class="btn btn-danger"> DELETE </a>
						</th>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			  </table>
			</div>
		  </div>
	    </div>
	  </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'poster', 'titlePage' => __('Poster List')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>