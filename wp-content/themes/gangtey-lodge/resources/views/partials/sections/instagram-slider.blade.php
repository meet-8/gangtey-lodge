@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="instagram bg-brown py-80 lgscreen:py-40">
        <div class="section-title section-title-center">
            @if (isset($content->title) && !empty($content->title))
                <div class="text-white">
                    <h3>{!! $content->title !!}</h3>
                </div>
            @endif
            @if (isset($content->description) && !empty($content->description))
                <div class="content white">
                    {!! $content->description !!}
                </div>
            @endif
            @if (isset($content->username) && !empty($content->username))
                <a href="{!! $content->username['url'] !!}">{!! $content->username['title'] !!}</a>
            @endif
        </div>
        <div class="container-fluid">
            @if (isset($content->images) && !empty($content->images))
                <div class="instagram-slider relative swiper mt-30">
                    <div class="swiper-wrapper">
                        @foreach ($content->images as $item)
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="{!! $item['image']['url'] !!}" alt="{!! $item['image']['alt'] !!}">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div
                        class="instagram-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="@asset('images/white-arrow.png')" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                    <div
                        class="instagram-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="@asset('images/white-arrow.png')" class="max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                </div>
            @endif
        </div>
    </section>
@endif
