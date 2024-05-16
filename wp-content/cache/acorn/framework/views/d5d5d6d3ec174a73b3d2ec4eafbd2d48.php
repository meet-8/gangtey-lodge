<!-- Footer Start -->
<footer class="footer bg-black-400">
    <div class="newsletter bg-black-100 py-50">
        <div class="container-fluid-md">
            <h6 class="text-white uppercase font-400 text-20">Sign up for special offers, news and promotions</h6>
            <div class="newsletter-form">
                <div class="gform_wrapper">
                    <div class="gform_body">
                        <form>
                            <div class="gform_body gform-body">
                                <div class="gform_fields">
                                    <div id="field_1_1" class="gfield">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div id="field_1_2" class="gfield">
                                        <input type="text" placeholder="Surname">
                                    </div>
                                    <div id="field_1_3" class="gfield">
                                        <input type="text" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="gform_footer top_label">
                                <input type="submit" class="gform_button button" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-grid">
        <div class="w-[600px] lgscreen:w-full lgscreen:px-15 mx-auto pt-85 pb-50 text-center">
            <?php if(isset($footer_logo) && $footer_logo): ?>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo $footer_logo['url']; ?>" class="mx-auto" alt="<?php echo $footer_logo['alt']; ?>">
                </a>
            <?php endif; ?>
            <div class="footer-menu border-0 border-solid border-b-[0.8px] border-opacity-20 border-gray-100 pb-30">
                <?php echo wp_nav_menu([
                    'theme_location' => 'footer_navigation_1',
                    'menu_class' => 'flex smscreen:flex-col gap-y-3 justify-center gap-x-14 pt-40',
                    'container' => false,
                ]); ?>

            </div>
            <div class="footer-navbar pt-30">
                <ul class="flex flex-wrap gap-x-10 justify-center gap-y-6">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'footer_navigation_2',
                        'menu_class' => 'flex flex-wrap gap-x-10 justify-center gap-y-6',
                        'container' => false,
                    ]); ?>

            </div>
            <?php if(isset($footer_button) && $footer_button): ?>
                <div class="btn-custom mt-40">
                    <a href="<?php echo $footer_button['url']; ?>" class="btn btn-gold"><?php echo $footer_button['title']; ?></a>
                </div>
            <?php endif; ?>
            <div class="copyright">
                <?php if($phone_number || $email): ?>
                    <div class="copyright-info pt-40">
                        <ul class="flex smscreen:flex-wrap justify-center gap-x-4">
                            <?php if($phone_number): ?>
                                <li><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></li>
                            <?php endif; ?>
                            <?php if($email): ?>
                                <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(isset($social_media) && $social_media): ?>
                    <div class="sicon pt-30">
                        <ul class="flex gap-x-3 justify-center">
                            <?php $__currentLoopData = $social_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo $item['link']; ?>"><img src="<?php echo $item['icon']['url']; ?>"
                                            alt="<?php echo $item['icon']['alt']; ?>"></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/sections/footer.blade.php ENDPATH**/ ?>