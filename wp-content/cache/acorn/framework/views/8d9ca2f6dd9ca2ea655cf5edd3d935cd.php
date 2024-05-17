<?php if($tsContetData): ?>
    <?php $__currentLoopData = $tsContetData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($content->layout == 'hero_slider'): ?>
            <?php echo $__env->make('partials.sections.hero-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'logo_section'): ?>
            <?php echo $__env->make('partials.sections.logo-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'common_section'): ?>
            <?php echo $__env->make('partials.sections.common-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'zigzag_section'): ?>
            <?php echo $__env->make('partials.sections.zigzag-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'full_image_content'): ?>
            <?php echo $__env->make('partials.sections.full-image-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif($content->layout == 'page_grid_section'): ?>
            <?php echo $__env->make('partials.sections.page-grid-sectiont', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/content-ts.blade.php ENDPATH**/ ?>