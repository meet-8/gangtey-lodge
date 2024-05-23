<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
<?php if($content->style == 'style-2'): ?>
    <?php
        $style = '!px-0';
        $padding = "";
    ?>
<?php else: ?>
    <?php
        $style = '';
        $padding = "py-50";
    ?>
<?php endif; ?>
    <section
        class="full-img-content bg-lightgold <?php echo $padding; ?> lgscreen:py-30 relative <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid <?php echo $style; ?> relative">
            <div class="full-img-content-inner relative h-[585px] bg-cover"
                <?php if(isset($content->image) && $content->image): ?> style="background-image: url('<?php echo $content->image['url']; ?>')" <?php endif; ?>>
                <div class="relative z-9 h-full flex flex-col justify-center items-center px-20 text-center">
                    <div class="title-white w-[600px] lgscreen:w-full px-15">
                        <?php if(isset($content->tag) && $content->tag): ?>
                            <span><?php echo $content->tag; ?></span>
                        <?php endif; ?>
                        <?php if(isset($content->title) && $content->title): ?>
                            <h4><?php echo $content->title; ?></h4>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($content->description) && $content->description): ?>
                        <div class="content white w-[600px] lgscreen:w-full px-15">
                            <?php echo $content->description; ?>

                        </div>
                    <?php endif; ?>
                    <?php if(isset($content->button) && !empty($content->button)): ?>
                        <div class="btn-custom mt-10">
                            <a href="<?php echo $content->button['url']; ?>" target="<?php echo e($content->button['target'] ? $content->button['target'] : '_self'); ?>" class="btn btn-gold"><?php echo $content->button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/full-image-content.blade.php ENDPATH**/ ?>