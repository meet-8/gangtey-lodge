@if (isset($content->hide_section) && $content->hide_section == 'no')

    @if ($content->background == 'gold')
        @php
            $background = 'bg-lightgold';
            $btn = 'btn-gold-link';
        @endphp
    @else
        @php
            $background = '';
            $btn = 'btn-gold-border';
        @endphp
    @endif


    <section class="common-content py-80 lgscreen:py-40 {!! $background !!} @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="w-[1008px] mx-auto lgscreen:w-full px-20 text-center">
            @if (isset($content->logo) && $content->logo)
                <img src="{!! $content->logo['url'] !!}" class="m-auto w-[45px]" alt="{!! $content->logo['alt'] !!}">
            @endif
            @if (isset($content->title) && $content->title)
                <div class="title-gold">
                    <h2>{!! $content->title !!}</h2>
                </div>
            @endif
            @if (isset($content->description) && $content->description)
                <div class="content w-[800px] ipad:w-full ipad:px-20 m-auto">
                    {!! $content->description !!}
                </div>
            @endif
            @if (isset($content->button) && !empty($content->button))
                <div class="btn-custom mt-30">
                    <a href="{!! $content->button['url'] !!}"
                        target="{{ $content->button['target'] ? $content->button['target'] : '_self' }}"
                        class="btn {!! $btn !!}">{!! $content->button['title'] !!}</a>
                </div>
            @endif
        </div>
    </section>
@endif
