<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <?php if($content->background == 'gold'): ?>
        <?php
            $background = 'bg-lightgold';
        ?>
    <?php else: ?>
        <?php
            $background = '';
        ?>
    <?php endif; ?>
    <section
        class="discover-rooms <?php echo $background; ?> py-45 lgscreen:py-30 <?php echo $background; ?> <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid">
            <div class="section-title section-title-center">
                <?php if(isset($content->tag) && $content->tag): ?>
                    <span><?php echo $content->tag; ?></span>
                <?php endif; ?>
                <?php if(isset($content->title) && $content->title): ?>
                    <div class="title-black">
                        <h3><?php echo $content->title; ?></h3>
                    </div>
                <?php endif; ?>
                <?php if(isset($content->description) && $content->description): ?>
                    <div class="content">
                        <?php echo $content->description; ?>

                    </div>
                <?php endif; ?>
                <?php if(isset($content->button_1) && !empty($content->button_1)): ?>
                    <div class="btn-custom mt-30">
                        <a href="<?php echo $content->button_1['url']; ?>"
                            target="<?php echo e($content->button_1['target'] ? $content->button_1['target'] : '_self'); ?>"
                            class="btn btn-gold-link"><?php echo $content->button_1['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(isset($content->images) && $content->images): ?>
                <div class="discover-rooms-slider swiper mt-50">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?php echo $img['image']['url']; ?>" alt="<?php echo $img['image']['alt']; ?>">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div
                        class="discover-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                    <div
                        class="discover-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($content->button_2) && !empty($content->button_2)): ?>
                <div class="btn-custom flex items-center justify-center mt-40">
                    <a href="<?php echo $content->button_2['url']; ?>"
                        target="<?php echo e($content->button_2['target'] ? $content->button_2['target'] : '_self'); ?>"
                        class="btn btn-red-border"><?php echo $content->button_2['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/content-with-slider.blade.php ENDPATH**/ ?>