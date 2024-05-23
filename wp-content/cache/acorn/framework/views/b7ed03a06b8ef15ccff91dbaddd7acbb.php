<?php if($content->image_alignment == 'right'): ?>
    <?php
        $first = 'lg:order-2';
        $second = 'lg:order-1';
    ?>
<?php else: ?>
    <?php
        $first = 'lg:order-1';
        $second = 'lg:order-2';
    ?>
<?php endif; ?>

<?php if($content->background == 'gold'): ?>
    <?php
        $background = 'bg-lightgold';
    ?>
<?php else: ?>
    <?php
        $background = '';
    ?>
<?php endif; ?>


<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <?php if($content->simple_content_or_slider == 'content'): ?>
        <section
            class="zigzag portrait <?php echo $background; ?> py-50 lgscreen:py-30 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="container-fluid">
                <div class="flex flex-wrap items-center">
                    <?php if(isset($content->image) && $content->image): ?>
                        <div class="lg:w-6/12 w-full <?php echo $first; ?>">
                            <div class="img">
                                <img src="<?php echo $content->image['url']; ?>" alt="<?php echo $content->logo['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="lg:w-6/12 w-full <?php echo $second; ?>">
                        <div class="zigzag-content w-[492px] xlscreen:w-[430px] lgscreen:w-full lgscreen:pt-30 m-auto">
                            <?php if(isset($content->tag) && $content->tag): ?>
                                <span><?php echo $content->tag; ?></span>
                            <?php endif; ?>
                            <?php if(isset($content->title) && $content->title): ?>
                                <div class="title-black">
                                    <h5><?php echo $content->title; ?></h5>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($content->description) && $content->description): ?>
                                <div class="content">
                                    <?php echo $content->description; ?>

                                </div>
                            <?php endif; ?>
                            <?php if(isset($content->button) && !empty($content->button)): ?>
                                <div class="btn-custom mt-30">
                                    <a href="<?php echo $content->button['url']; ?>"
                                        target="<?php echo e($content->button['target'] ? $content->button['target'] : '_self'); ?>"
                                        class="btn btn-gold-border"><?php echo $content->button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif($content->simple_content_or_slider == 'slider'): ?>
        <section
            class="zigzag-with-slider py-45 mt-45 lgscreen:mt-0 lgscreen:py-30 <?php echo $background; ?> <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="container-fluid">
                <div class="flex flex-wrap items-center">
                    <div class="lg:w-5/12 w-full ">
                        <div class="zigzag-with-slider-content px-80 desktop2:px-60 lgscreen:px-0">
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
                            <?php if(isset($content->button) && !empty($content->button)): ?>
                                <div class="btn-custom mt-30">
                                    <a href="<?php echo $content->button['url']; ?>"
                                        target="<?php echo e($content->button['target'] ? $content->button['target'] : '_self'); ?>"
                                        class="btn btn-gold-border"><?php echo $content->button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(isset($content->images) && $content->images): ?>
                        <div class="lg:w-7/12 w-full pl-60 lgscreen:pl-0 lgscreen:pt-30">
                            <div class="zigzag-inner-slider swiper relative">
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
                                    class="zigzag-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                    <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                                        alt="">
                                </div>
                                <div
                                    class="zigzag-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                    <img src="<?= \Roots\asset('images/white-arrow.png'); ?>" class="max-w-[12px] mdscreen:max-w-[8px]"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <?php if($content->background == 'gold'): ?>
            <?php
                $bg = 'bg-add';
            ?>
        <?php else: ?>
            <?php
                $bg = '';
            ?>
        <?php endif; ?>
        <section
            class="zigzag-group <?php echo $bg; ?> py-60 lgscreen:py-30 relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="container-fluid">
                <div class="flex flex-wrap">
                    <?php if(isset($content->video_url) && !empty($content->video_url)): ?>
                        <div class="lg:w-6/12 w-full">
                            <div class="video">
                                <video src="<?php echo $content->video_url; ?>" autoplay="" loop="" muted="muted"
                                    controlslist="nodownload"></video>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="lg:w-6/12 w-full relative">
                        <div
                            class="zigzag-content w-[450px] mx-auto lgscreen:w-full px-15 lgscreen:px-0 pt-[200px] xlscreen:pt-100 lgscreen:pt-30">
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
                            <?php if(isset($content->button) && !empty($content->button)): ?>
                                <div class="btn-custom mt-30">
                                    <a href="<?php echo $content->button['url']; ?>"
                                        target="<?php echo e($content->button['target'] ? $content->button['target'] : '_self'); ?>"
                                        data-fancybox data-src="#content-modal"
                                        class="btn btn-red-link"><?php echo $content->button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/zigzag-section.blade.php ENDPATH**/ ?>