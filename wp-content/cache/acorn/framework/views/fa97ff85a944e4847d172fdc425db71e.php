<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <?php if($content->style == 'style-1'): ?>
        <section
            class="zigzag-img-grid bg-add py-45 lgscreen:py-30 relative  <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="container-fluid relative">
                <div class="flex flex-wrap lg:mx-minus-15 mx-0 gap-y-5">
                    <?php if(isset($content->left_image) && $content->left_image): ?>
                        <div class="lg:w-8/12 w-full lg:px-15 px-0">
                            <div class="img">
                                <img src="<?php echo $content->left_image['url']; ?>" alt="<?php echo $content->left_image['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($content->right_image) && $content->right_image): ?>
                        <div class="lg:w-4/12 w-full lg:px-15 px-0">
                            <div class="img">
                                <img src="<?php echo $content->right_image['url']; ?>" alt="<?php echo $content->right_image['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php elseif($content->style == 'style-2'): ?>
        <section class="img-column-grid <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="container-fluid">
                <div class="flex flex-wrap md:mx-minus-15 mx-0 gap-y-4">
                    <?php if(isset($content->left_image) && $content->left_image): ?>
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="<?php echo $content->left_image['url']; ?>" alt="<?php echo $content->left_image['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($content->centre_image) && $content->centre_image): ?>
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="<?php echo $content->centre_image['url']; ?>" alt="<?php echo $content->centre_image['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($content->right_image) && $content->right_image): ?>
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="<?php echo $content->right_image['url']; ?>" alt="<?php echo $content->right_image['alt']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/image-grid.blade.php ENDPATH**/ ?>