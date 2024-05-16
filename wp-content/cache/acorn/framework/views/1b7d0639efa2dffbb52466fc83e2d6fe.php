



<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?>
        <?php (the_post()); ?>
        <?php echo $__env->make('partials.content-ts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/template-ts-content.blade.php ENDPATH**/ ?>