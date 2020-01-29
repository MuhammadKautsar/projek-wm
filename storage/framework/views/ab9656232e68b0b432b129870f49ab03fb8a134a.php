    
<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <form action ="/updateimage/<?php echo e($poster->id); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>

                <div class="card ">
                     <div class="card-header card-header-primary">
                       <h4 class="card-title"><?php echo e(__('Edit Gambar')); ?></h4>
                       <p class="card-category"><?php echo e(__('Image information')); ?></p>
                     </div>
                      <div class="card-body ">
                            <input type="hidden" name="id" id="id" value="<?php echo e($poster->id); ?>">
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" value="<?php echo e($poster->title); ?>">
                            </div>
                        </div>                        
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" name="filename" value="<?php echo e($poster->filename); ?>">
                            </div>
                        </div>
                      </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', ['activePage' => 'uploadfile', 'titlePage' => __('Halaman Upload')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>