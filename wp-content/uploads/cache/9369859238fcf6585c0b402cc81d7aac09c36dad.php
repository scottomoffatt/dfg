<?php (new \Sober\Controller\Blade\Debugger(get_defined_vars())); ?>
<?php if($cat): ?>
    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero is-large">
      <article class="hero-body">
        <div class="container">
          <figure><?php echo $cat_item['thumbnail']; ?></figure>
          <div class="column">
            <h1><?php echo $cat_item['title']; ?></h1>

            <?php echo $cat_item['content']; ?>

            </div>
        </div>
      </article>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        Not found
    <?php endif; ?>
