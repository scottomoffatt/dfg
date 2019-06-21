<header class="banner">
  <div class="container">

    <a href="<?php echo e(home_url('/')); ?>"><img <img src="<?php echo e($site_brand); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>"></a>
    <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu($primarymenu); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
