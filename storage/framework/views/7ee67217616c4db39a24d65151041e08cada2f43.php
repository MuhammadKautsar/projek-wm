<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      <?php echo e(__('Wall Magazine')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Beranda')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
          <i class="material-icons">account_box</i>
            <p><?php echo e(__('User profile')); ?> </p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
          <i class="material-icons">people</i>
            <p> <?php echo e(__('User Management')); ?> </p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'poster' ? ' active' : ''); ?>">
        <a class="nav-link" href="/poster">
          <i class="material-icons">assignment</i>
            <p><?php echo e(__('Poster List')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'icons' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('icons')); ?>">
          <i class="material-icons">bubble_chart</i>
          <p><?php echo e(__('Icons')); ?></p>
        </a>
      </li>
    </ul>
  </div>
</div>