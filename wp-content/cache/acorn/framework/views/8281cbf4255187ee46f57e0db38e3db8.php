<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>

    <?php if($content->background == 'gold'): ?>
        <?php
            $background = 'bg-lightgold';
            $btn = 'btn-gold-link';
        ?>
    <?php else: ?>
        <?php
            $background = '';
            $btn = 'btn-gold-border';
        ?>
    <?php endif; ?>


    <section class="common-content py-80 lgscreen:py-40 <?php echo $background; ?> <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="w-[1008px] mx-auto lgscreen:w-full px-20 text-center">
            <?php if(isset($content->logo) && $content->logo): ?>
                <img src="<?php echo $content->logo['url']; ?>" class="m-auto w-[45px]" alt="<?php echo $content->logo['alt']; ?>">
            <?php endif; ?>
            <?php if(isset($content->title) && $content->title): ?>
                <div class="title-gold">
                    <h2><?php echo $content->title; ?></h2>
                </div>
            <?php endif; ?>
            <?php if(isset($content->description) && $content->description): ?>
                <div class="content w-[800px] ipad:w-full ipad:px-20 m-auto">
                    <?php echo $content->description; ?>

                </div>
            <?php endif; ?>
            <?php if(isset($content->button) && !empty($content->button)): ?>
                <div class="btn-custom mt-30">
                    <a href="<?php echo $content->button['url']; ?>"
                        target="<?php echo e($content->button['target'] ? $content->button['target'] : '_self'); ?>"
                        class="btn <?php echo $btn; ?>"><?php echo $content->button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/common-section.blade.php ENDPATH**/ ?>