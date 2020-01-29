<?php $__env->startSection('content'); ?>
<div id="map"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>