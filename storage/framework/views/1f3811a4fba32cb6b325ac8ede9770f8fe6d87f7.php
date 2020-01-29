<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                   <table class="table">
                       <tr>
                           <th>ID</th>
                           <th>NIM</th>
                           <th>Jurusan</th>
                           <th>Fakultas</th>
                       </tr>
                       <?php $__currentLoopData = $informasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><?php echo e($info->id); ?></td>
                               <td><?php echo e($info->nim); ?></td>
                               <td><?php echo e($info->jurusan); ?></td>
                               <td><?php echo e($info->fakultas); ?></td>
                           </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>