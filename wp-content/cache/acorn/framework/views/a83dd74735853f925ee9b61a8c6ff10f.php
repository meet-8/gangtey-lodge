<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>

    <?php if(isset($content->logo_images) && $content->logo_images): ?>
        <section
            class="common-content logo-section py-20 lgscreen:py-20 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
            <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
            <div class="logos  w-full pb-20 py-20 bottom-0 ipad:px-20 smscreen2:pb-20 invert">
                <ul class="flex flex-wrap justify-center items-center gap-x-5 relative">
                    <?php $__currentLoopData = $content->logo_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <img class="max-w-[8rem] ipad:max-w-[100px]" src="<?php echo $img['image']['url']; ?>"
                                alt="<?php echo $img['image']['alt']; ?>">
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>


<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/partials/sections/logo-section.blade.php ENDPATH**/ ?>