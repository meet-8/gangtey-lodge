@if ($content->image_alignment == 'right')
    @php
        $first = 'lg:order-2';
        $second = 'lg:order-1';
    @endphp
@else
    @php
        $first = 'lg:order-1';
        $second = 'lg:order-2';
    @endphp
@endif

@if ($content->background == 'gold')
    @php
        $background = 'bg-lightgold';
    @endphp
@else
    @php
        $background = '';
    @endphp
@endif


@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->simple_content_or_slider == 'content')
        <section
            class="zigzag portrait {!! $background !!} py-50 lgscreen:py-30 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid">
                <div class="flex flex-wrap items-center">
                    @if (isset($content->image) && $content->image)
                        <div class="lg:w-6/12 w-full {!! $first !!}">
                            <div class="img">
                                <img src="{!! $content->image['url'] !!}" alt="{!! $content->logo['alt'] !!}">
                            </div>
                        </div>
                    @endif
                    <div class="lg:w-6/12 w-full {!! $second !!}">
                        <div class="zigzag-content w-[492px] xlscreen:w-[430px] lgscreen:w-full lgscreen:pt-30 m-auto">
                            @if (isset($content->tag) && $content->tag)
                                <span>{!! $content->tag !!}</span>
                            @endif
                            @if (isset($content->title) && $content->title)
                                <div class="title-black">
                                    <h5>{!! $content->title !!}</h5>
                                </div>
                            @endif
                            @if (isset($content->description) && $content->description)
                                <div class="content">
                                    {!! $content->description !!}
                                </div>
                            @endif
                            @if (isset($content->button) && !empty($content->button))
                                <div class="btn-custom mt-30">
                                    <a href="{!! $content->button['url'] !!}"
                                        target="{{ $content->button['target'] ? $content->button['target'] : '_self' }}"
                                        class="btn btn-gold-border">{!! $content->button['title'] !!}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif($content->simple_content_or_slider == 'slider')
        <section
            class="zigzag-with-slider py-45 mt-45 lgscreen:mt-0 lgscreen:py-30 {!! $background !!} @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid">
                <div class="flex flex-wrap items-center">
                    <div class="lg:w-5/12 w-full ">
                        <div class="zigzag-with-slider-content px-80 desktop2:px-60 lgscreen:px-0">
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
                            @if (isset($content->button) && !empty($content->button))
                                <div class="btn-custom mt-30">
                                    <a href="{!! $content->button['url'] !!}"
                                        target="{{ $content->button['target'] ? $content->button['target'] : '_self' }}"
                                        class="btn btn-gold-border">{!! $content->button['title'] !!}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (isset($content->images) && $content->images)
                        <div class="lg:w-7/12 w-full pl-60 lgscreen:pl-0 lgscreen:pt-30">
                            <div class="zigzag-inner-slider swiper relative">
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
                                    class="zigzag-swiper-button-next absolute flex mdscreen:flex top-50per right-30 mdscreen:right-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                    <img src="@asset('images/white-arrow.png')" class="rotate-180 max-w-[12px] mdscreen:max-w-[8px]"
                                        alt="">
                                </div>
                                <div
                                    class="zigzag-swiper-button-prev absolute flex mdscreen:flex top-50per left-30 mdscreen:left-15 translate-y-minus_50 z-9 w-50 h-50 mdscreen:w-30 mdscreen:h-30 rounded-999 bg-black-100 bg-opacity-60 items-center justify-center cursor-pointer">
                                    <img src="@asset('images/white-arrow.png')" class="max-w-[12px] mdscreen:max-w-[8px]"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @else
        @if ($content->background == 'gold')
            @php
                $bg = 'bg-add';
            @endphp
        @else
            @php
                $bg = '';
            @endphp
        @endif
        <section
            class="zigzag-group {!! $bg !!} py-60 lgscreen:py-30 relative @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid">
                <div class="flex flex-wrap">
                    @if (isset($content->video_url) && !empty($content->video_url))
                        <div class="lg:w-6/12 w-full">
                            <div class="video">
                                <video src="{!! $content->video_url !!}" autoplay="" loop="" muted="muted"
                                    controlslist="nodownload"></video>
                            </div>
                        </div>
                    @endif
                    <div class="lg:w-6/12 w-full relative">
                        <div
                            class="zigzag-content w-[450px] mx-auto lgscreen:w-full px-15 lgscreen:px-0 pt-[200px] xlscreen:pt-100 lgscreen:pt-30">
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
                            @if (isset($content->button) && !empty($content->button))
                                <div class="btn-custom mt-30">
                                    <a href="{!! $content->button['url'] !!}"
                                        target="{{ $content->button['target'] ? $content->button['target'] : '_self' }}"
                                        data-fancybox data-src="#content-modal"
                                        class="btn btn-red-link">{!! $content->button['title'] !!}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
