<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="testimonial bg-lightgold py-100 lgscreen:py-50 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-md">
            <?php if(isset($content->title) && !empty($content->title)): ?>
                <div class="text-center">
                    <h6><?php echo $content->title; ?></h6>
                </div>
            <?php endif; ?>
            <?php if(isset($content->testimonials) && !empty($content->testimonials)): ?>
                <div class="testimonial-slider swiper mt-0 py-50">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <?php if(isset($item['content']) && !empty($item['content'])): ?>
                                        <?php echo $item['content']; ?>

                                    <?php endif; ?>
                                    <?php if(isset($item['image']) && !empty($item['image'])): ?>
                                        <img src="<?php echo $item['image']['url']; ?>" class="w-[120px] mx-auto mt-30"
                                            alt="<?php echo $item['image']['alt']; ?>">
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/testimonial-section.blade.php ENDPATH**/ ?>