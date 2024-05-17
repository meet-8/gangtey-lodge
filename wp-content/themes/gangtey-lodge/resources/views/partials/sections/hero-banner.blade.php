@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="banner @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        @if (isset($content->images) && $content->images)
            <div class="banner-slider swiper">
                <div class="swiper-wrapper">
                    @foreach ($content->images as $img)
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="{!! $img['image']['url'] !!}" alt="{!! $img['image']['alt'] !!}">
                            </div>
                            <div class="imgMobile">
                                <img src="{!! $img['image']['url'] !!}" alt="{!! $img['image']['alt'] !!}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div
            class="banner-content flex-col absolute z-9 top-0 h-full flex justify-center items-center w-full text-center">
            <div class="banner-title px-15">
                @if (isset($content->title) && $content->title)
                    <h1 class="text-white">{!! $content->title !!}</h1>
                @endif
                @if (isset($content->button) && $content->button)
                    <a href="{!! $content->button['url'] !!}"
                        class="btn btn-transparent mt-20 inline-block">{!! $content->button['title'] !!}</a>
                @endif
            </div>
        </div>
    </section>
@endif
