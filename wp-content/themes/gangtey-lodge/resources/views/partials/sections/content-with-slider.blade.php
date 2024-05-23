@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->background == 'gold')
        @php
            $background = 'bg-lightgold';
        @endphp
    @else
        @php
            $background = '';
        @endphp
    @endif
    <section
        class="discover-rooms {!! $background !!} py-45 lgscreen:py-30 {!! $background !!} @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid">
            <div class="section-title section-title-center">
                @if (isset($content->tag) && $content->tag)
                    <span>{!! $content->tag !!}</span>
                @endif
                @if (isset($content->title) && $content->title)
                    <div class="title-black">
                        <h3>{!! $content->title !!}</h3>
                    </div>
                @endif
                @if (isset($content->description) && $content->description)
                    <div class="content">
                        {!! $content->description !!}
                    </div>
                @endif
                @if (isset($content->button_1) && !empty($content->button_1))
                    <div class="btn-custom mt-30">
                        <a href="{!! $content->button_1['url'] !!}"
                            target="{{ $content->button_1['target'] ? $content->button_1['target'] : '_self' }}"
                            class="btn btn-gold-link">{!! $content->button_1['title'] !!}</a>
                    </div>
                @endif
            </div>
            @if (isset($content->images) && $content->images)
                <div class="discover-rooms-slider swiper mt-50">
                    <div class="swiper-wrapper">
                        @foreach ($content->images as $img)
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="{!! $img['image']['url'] !!}" alt="{!! $img['image']['alt'] !!}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div
                        class="discover-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="@asset('images/white-arrow.png')" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                            alt="">
                    </div>
                    <div
                        class="discover-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                        <img src="@asset('images/white-arrow.png')" class="max-w-[12px] mdscreen:max-w-[8px]" alt="">
                    </div>
                </div>
            @endif
            @if (isset($content->button_2) && !empty($content->button_2))
                <div class="btn-custom flex items-center justify-center mt-40">
                    <a href="{!! $content->button_2['url'] !!}"
                        target="{{ $content->button_2['target'] ? $content->button_2['target'] : '_self' }}"
                        class="btn btn-red-border">{!! $content->button_2['title'] !!}</a>
                </div>
            @endif
        </div>
    </section>
@endif
