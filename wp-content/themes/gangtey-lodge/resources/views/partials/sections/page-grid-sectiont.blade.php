@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="explore-img-grid py-80 lgscreen:py-40 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="section-title section-title-center">
            <img src=@asset('images/Gangtey-Lodge-Entrance.png') class="w-[308px] mx-auto" alt="Gangtey Lodge Entrance">
            <div class="title-black">
                <h3>Discover more of Gangtey Lodge</h3>
            </div>
            <div class="content">
                <p>
                    Qui autem de re desit libido frustra miseri qui incurrit odium sui.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            @if (isset($content->page) && !empty($content->page))
                <div class="explore-img-grid-slider swiper mt-50">
                    <div class="swiper-wrapper">
                        @foreach ($content->page as $item)
                            <div class="swiper-slide">
                                @if (isset($item['image']) && !empty($item['image']))
                                    <div class="img">
                                        <img src="{!! $item['image'] !!}" alt="Escapes">
                                    </div>
                                @endif
                                <div class="explore-img-content content text-center pt-30 px-20">
                                    @if (isset($item['title']) && !empty($item['title']))
                                        <h6>{!! $item['title'] !!}</h6>
                                    @endif
                                    @if (isset($item['excerpts']) && !empty($item['excerpts']))
                                        <p>{!! $item['excerpts'] !!}</p>
                                    @endif
                                    <div class="btn-custom mt-15">
                                        <a href="{!! $item['permalink'] !!}" class="btn btn-red-link">Explore</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div
                        class="explore-swiper-button-next absolute hidden mdscreen:flex top-30per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src=@asset('images/white-arrow.png') class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                    <div
                        class="explore-swiper-button-prev absolute hidden mdscreen:flex top-30per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src=@asset('images/white-arrow.png') class="max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                </div>
            @endif
        </div>
    </section>
@endif
