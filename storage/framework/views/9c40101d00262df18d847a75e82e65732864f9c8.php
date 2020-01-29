<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Mahasiswa</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('daftar')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right"><?php echo e(__('NIM')); ?></label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control<?php echo e($errors->has('nim') ? ' is-invalid' : ''); ?>" name="nim" value="<?php echo e(old('nim')); ?>" required autofocus>

                                <?php if($errors->has('nim')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nim')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control<?php echo e($errors->has('jurusan') ? ' is-invalid' : ''); ?>" name="jurusan" value="<?php echo e(old('jurusan')); ?>" required>

                                <?php if($errors->has('jurusan')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fakultas" class="col-md-4 col-form-label text-md-right">Fakultas</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text" class="form-control<?php echo e($errors->has('fakultas') ? ' is-invalid' : ''); ?>" name="fakultas" required>

                                <?php if($errors->has('fakultas')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('fakultas')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>