<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="banner <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <?php if(isset($content->images) && $content->images): ?>
            <div class="banner-slider swiper">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $content->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="<?php echo $img['image']['url']; ?>" alt="<?php echo $img['image']['alt']; ?>">
                            </div>
                            <div class="imgMobile">
                                <img src="<?php echo $img['image']['url']; ?>" alt="<?php echo $img['image']['alt']; ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>
        <div
            class="banner-content flex-col absolute z-9 top-0 h-full flex justify-center items-center w-full text-center">
            <div class="banner-title px-15">
                <?php if(isset($content->title) && $content->title): ?>
                    <h1 class="text-white"><?php echo $content->title; ?></h1>
                <?php endif; ?>
                <?php if(isset($content->button) && $content->button): ?>
                    <a href="<?php echo $content->button['url']; ?>"
                        class="btn btn-transparent mt-20 inline-block"><?php echo $content->button['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/hero-banner.blade.php ENDPATH**/ ?>