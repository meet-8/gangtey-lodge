@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="testimonial bg-lightgold py-100 lgscreen:py-50 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-md">
            @if (isset($content->title) && !empty($content->title))
                <div class="text-center">
                    <h6>{!! $content->title !!}</h6>
                </div>
            @endif
            @if (isset($content->testimonials) && !empty($content->testimonials))
                <div class="testimonial-slider swiper mt-0 py-50">
                    <div class="swiper-wrapper">
                        @foreach ($content->testimonials as $item)
                            <div class="swiper-slide">
                                <div class="text-center">
                                    @if (isset($item['content']) && !empty($item['content']))
                                        {!! $item['content'] !!}
                                    @endif
                                    @if (isset($item['image']) && !empty($item['image']))
                                        <img src="{!! $item['image']['url'] !!}" class="w-[120px] mx-auto mt-30"
                                            alt="{!! $item['image']['alt'] !!}">
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            @endif
        </div>
    </section>
@endif
