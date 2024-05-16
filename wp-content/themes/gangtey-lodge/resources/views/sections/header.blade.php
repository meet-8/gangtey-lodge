<?php
?>
<!-- Wrapper Start -->
<div class="menuclose h-full fixed bg-transparent hidden w-[calc(100%_-_385px)]"></div>
<!-- Header Start -->
<header class="header absolute top-0 left-0 w-full py-30 z-99">
    <div class="container-fluid relative">
        <div class="grid grid-cols-3 items-center justify-between ipad:flex ipad:justify-between">
            @if (isset($header_white_logo) && $header_white_logo)
                <div class="logo">
                    <a href="{!! home_url() !!}">
                        <img src="{!! $header_white_logo['url'] !!}" alt="{!! $header_white_logo['alt'] !!}">
                    </a>
                </div>
            @endif
            <div class="navbar ipad:hidden">
                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'flex flex-wrap gap-x-8 justify-center',
                    'container' => false,
                ]) !!}
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
                @if (isset($header_button) && $header_button)
                    <div class="btn-custom ml-15 smscreen:hidden">
                        <a href="{!! $header_button['url'] !!}" class="btn btn-gold">{!! $header_button['title'] !!}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
<div class="main-nav bg-gray-100 w-[385px] h-screen fixed top-0 overflow-x-hidden z-9 pt-150 smscreen:pt-90 pb-50">
    <div class="text-center px-40">
        @if (isset($header_black_logo) && $header_black_logo)
            <img src="{!! $header_black_logo['url'] !!}" class="mx-auto" alt="{!! $header_black_logo['alt'] !!}">
        @endif
        <div class="main-menu pt-20 border-0 border-b-[0.8px] border-solid border-gold border-opacity-40 pb-40">
            {!! wp_nav_menu([
                'theme_location' => 'second_navigation',
                'menu_class' => 'grid gap-y-6',
                'container' => false,
            ]) !!}
        </div>
        <div class="main-menu-sub pt-40">
            {!! wp_nav_menu([
                'theme_location' => 'third_navigation',
                'menu_class' => 'grid gap-y-3',
                'container' => false,
            ]) !!}
        </div>
        @if (isset($social_media) && $social_media)
            <div class="sicon pt-30">
                <ul class="flex gap-x-2 justify-center">
                    @foreach ($social_media as $item)
                        <li><a href="{!! $item['link'] !!}"><img src="{!! $item['icon']['url'] !!}"
                                    alt="{!! $item['icon']['alt'] !!}"></a></li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($phone_number || $email)
            <div class="ct-info pt-15">
                <ul class="flex justify-center gap-x-4">
                    @if ($phone_number)
                        <li><a href="tel:{!! $phone_number !!}">{!! $phone_number !!}</a></li>
                    @endif
                    @if ($email)
                        <li><a href="mailto:{!! $email !!}">{!! $email !!}</a></li>
                    @endif
                </ul>
            </div>
        @endif
        @if (isset($header_button) && $header_button)
            <div class="btn-custom mt-30 smscreen:block">
                <a href="{!! $header_button['url'] !!}" class="btn btn-gold">{!! $header_button['title'] !!}</a>
            </div>
        @endif

    </div>
</div>
