	
<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
			<form method="post" action="/uploadfile" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="card ">
		             <div class="card-header card-header-primary">
		               <h4 class="card-title"><?php echo e(__('Upload Gambar')); ?></h4>
		               <p class="card-category"><?php echo e(__('Image information')); ?></p>
		             </div>
		              <div class="card-body ">
		              	<div class="row">
		              		<label class="col-sm-2 col-form-label"><?php echo e(__('Title')); ?></label>
                  			<div class="col-sm-7">
				        	  <input class="form-control" type="text" name="title" value="" /> <br>
				        	</div>
				        </div>
				        <div class="row">
		              		<label class="col-sm-2 col-form-label"><?php echo e(__('File')); ?></label>
                  			<div class="col-sm-7">
				        	  <input type="file" name="filename" value="" /> <br>
				        	</div>
				        </div>
				       </div>
				       <div class="card-footer ml-auto mr-auto">
                			<button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
              		   </div>	            
				</div>
			</form>
		</div>
	  </div>
	</div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'uploadfile', 'titlePage' => __('Halaman Upload')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>