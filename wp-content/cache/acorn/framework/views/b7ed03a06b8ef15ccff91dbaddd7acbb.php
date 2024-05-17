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


<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="zigzag portrait bg-lightgold py-50 lgscreen:py-30 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
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
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/zigzag-section.blade.php ENDPATH**/ ?>