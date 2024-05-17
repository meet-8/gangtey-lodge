<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="explore-img-grid py-80 lgscreen:py-40">
        <div class="section-title section-title-center">
            <img src=<?= \Roots\asset('images/Gangtey-Lodge-Entrance.png'); ?> class="w-[308px] mx-auto" alt="Gangtey Lodge Entrance">
            <div class="title-black">
                <h3>Discover more of Gangtey Lodge</h3>
            </div>
            <div class="content">
                <p>
                    Qui autem de re desit libido frustra miseri qui incurrit odium sui.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <?php if(isset($content->page) && !empty($content->page)): ?>
                <div class="explore-img-grid-slider swiper mt-50">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <?php if(isset($item['image']) && !empty($item['image'])): ?>
                                    <div class="img">
                                        <img src="<?php echo $item['image']; ?>" alt="Escapes">
                                    </div>
                                <?php endif; ?>
                                <div class="explore-img-content content text-center pt-30 px-20">
                                    <?php if(isset($item['title']) && !empty($item['title'])): ?>
                                        <h6><?php echo $item['title']; ?></h6>
                                    <?php endif; ?>
                                    <?php if(isset($item['excerpts']) && !empty($item['excerpts'])): ?>
                                        <p><?php echo $item['excerpts']; ?></p>
                                    <?php endif; ?>
                                    <div class="btn-custom mt-15">
                                        <a href="<?php echo $item['permalink']; ?>" class="btn btn-red-link">Explore</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div
                        class="explore-swiper-button-next absolute hidden mdscreen:flex top-30per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src=<?= \Roots\asset('images/white-arrow.png'); ?> class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                    <div
                        class="explore-swiper-button-prev absolute hidden mdscreen:flex top-30per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src=<?= \Roots\asset('images/white-arrow.png'); ?> class="max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/page-grid-sectiont.blade.php ENDPATH**/ ?>