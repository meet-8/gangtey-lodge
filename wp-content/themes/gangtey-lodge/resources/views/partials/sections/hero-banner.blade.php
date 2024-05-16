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
                <h1 class="text-white">Authentic Luxury in </br> Undiscovered Bhutan</h1>
                <a href="#" class="btn btn-transparent mt-20 inline-block">explore your stay</a>
            </div>
        </div>
    </section>
@endif
