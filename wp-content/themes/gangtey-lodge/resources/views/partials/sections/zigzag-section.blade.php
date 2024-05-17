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


@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="zigzag portrait bg-lightgold py-50 lgscreen:py-30 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
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
@endif


