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
            @if (isset($footer_logo) && $footer_logo)
                <a href="{!! home_url() !!}">
                    <img src="{!! $footer_logo['url'] !!}" class="mx-auto" alt="{!! $footer_logo['alt'] !!}">
                </a>
            @endif
            <div class="footer-menu border-0 border-solid border-b-[0.8px] border-opacity-20 border-gray-100 pb-30">
                {!! wp_nav_menu([
                    'theme_location' => 'footer_navigation_1',
                    'menu_class' => 'flex smscreen:flex-col gap-y-3 justify-center gap-x-14 pt-40',
                    'container' => false,
                ]) !!}
            </div>
            <div class="footer-navbar pt-30">
                <ul class="flex flex-wrap gap-x-10 justify-center gap-y-6">
                    {!! wp_nav_menu([
                        'theme_location' => 'footer_navigation_2',
                        'menu_class' => 'flex flex-wrap gap-x-10 justify-center gap-y-6',
                        'container' => false,
                    ]) !!}
            </div>
            @if (isset($footer_button) && $footer_button)
                <div class="btn-custom mt-40">
                    <a href="{!! $footer_button['url'] !!}" class="btn btn-gold">{!! $footer_button['title'] !!}</a>
                </div>
            @endif
            <div class="copyright">
                @if ($phone_number || $email)
                    <div class="copyright-info pt-40">
                        <ul class="flex smscreen:flex-wrap justify-center gap-x-4">
                            @if ($phone_number)
                                <li><a href="tel:{!! $phone_number !!}">{!! $phone_number !!}</a></li>
                            @endif
                            @if ($email)
                                <li><a href="mailto:{!! $email !!}">{!! $email !!}</a></li>
                            @endif
                        </ul>
                    </div>
                @endif
                @if (isset($social_media) && $social_media)
                    <div class="sicon pt-30">
                        <ul class="flex gap-x-3 justify-center">
                            @foreach ($social_media as $item)
                                <li><a href="{!! $item['link'] !!}"><img src="{!! $item['icon']['url'] !!}"
                                            alt="{!! $item['icon']['alt'] !!}"></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
