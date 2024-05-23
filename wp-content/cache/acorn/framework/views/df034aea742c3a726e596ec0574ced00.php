<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="instagram bg-brown py-80 lgscreen:py-40">
        <div class="section-title section-title-center">
            <?php if(isset($content->title) && !empty($content->title)): ?>
                <div class="text-white">
                    <h3><?php echo $content->title; ?></h3>
                </div>
            <?php endif; ?>
            <?php if(isset($content->description) && !empty($content->description)): ?>
                <div class="content white">
                    <?php echo $content->description; ?>

                </div>
            <?php endif; ?>
            <?php if(isset($content->username) && !empty($content->username)): ?>
                <a href="<?php echo $content->username['url']; ?>"><?php echo $content->username['title']; ?></a>
            <?php endif; ?>
        </div>
        <div class="container-fluid">
            <?php if(isset($content->images) && !empty($content->images)): ?>
                <div class="instagram-slider relative swiper mt-30">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div
                        class="instagram-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                    <div
                        class="instagram-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/instagram-slider.blade.php ENDPATH**/ ?>