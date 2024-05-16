<?php
?>
<!-- Wrapper Start -->
<div class="menuclose h-full fixed bg-transparent hidden w-[calc(100%_-_385px)]"></div>
<!-- Header Start -->
<header class="header absolute top-0 left-0 w-full py-30 z-99">
    <div class="container-fluid relative">
        <div class="grid grid-cols-3 items-center justify-between ipad:flex ipad:justify-between">
            <?php if(isset($header_white_logo) && $header_white_logo): ?>
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo $header_white_logo['url']; ?>" alt="<?php echo $header_white_logo['alt']; ?>">
                    </a>
                </div>
            <?php endif; ?>
            <div class="navbar ipad:hidden">
                <?php echo wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'flex flex-wrap gap-x-8 justify-center',
                    'container' => false,
                ]); ?>

            </div>
            <div class="header-right flex items-center justify-end">
                <div class="menu-icon">
                    <a href="javascript:void(0)" class="menu-icon flex flex-wrap items-center justify-center">
                        <p class="uppercase text-13 font-400 text-black-100 tracking-02em pr-10">Close menu</p>
                        <div class="flex flex-wrap w-30 space-y-[4px] menu-line cursor-pointer">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </a>
                </div>
                <?php if(isset($header_button) && $header_button): ?>
                    <div class="btn-custom ml-15 smscreen:hidden">
                        <a href="<?php echo $header_button['url']; ?>" class="btn btn-gold"><?php echo $header_button['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<div class="main-nav bg-gray-100 w-[385px] h-screen fixed top-0 overflow-x-hidden z-9 pt-150 smscreen:pt-90 pb-50">
    <div class="text-center px-40">
        <?php if(isset($header_black_logo) && $header_black_logo): ?>
            <img src="<?php echo $header_black_logo['url']; ?>" class="mx-auto" alt="<?php echo $header_black_logo['alt']; ?>">
        <?php endif; ?>
        <div class="main-menu pt-20 border-0 border-b-[0.8px] border-solid border-gold border-opacity-40 pb-40">
            <?php echo wp_nav_menu([
                'theme_location' => 'second_navigation',
                'menu_class' => 'grid gap-y-6',
                'container' => false,
            ]); ?>

        </div>
        <div class="main-menu-sub pt-40">
            <?php echo wp_nav_menu([
                'theme_location' => 'third_navigation',
                'menu_class' => 'grid gap-y-3',
                'container' => false,
            ]); ?>

        </div>
        <?php if(isset($social_media) && $social_media): ?>
            <div class="sicon pt-30">
                <ul class="flex gap-x-2 justify-center">
                    <?php $__currentLoopData = $social_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo $item['link']; ?>"><img src="<?php echo $item['icon']['url']; ?>"
                                    alt="<?php echo $item['icon']['alt']; ?>"></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if($phone_number || $email): ?>
            <div class="ct-info pt-15">
                <ul class="flex justify-center gap-x-4">
                    <?php if($phone_number): ?>
                        <li><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></li>
                    <?php endif; ?>
                    <?php if($email): ?>
                        <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(isset($header_button) && $header_button): ?>
            <div class="btn-custom mt-30 smscreen:block">
                <a href="<?php echo $header_button['url']; ?>" class="btn btn-gold"><?php echo $header_button['title']; ?></a>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\gangtey-lodge\wp-content\themes\gangtey-lodge\resources\views/sections/header.blade.php ENDPATH**/ ?>