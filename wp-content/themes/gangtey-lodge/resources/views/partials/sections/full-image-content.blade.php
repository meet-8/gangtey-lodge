@if (isset($content->hide_section) && $content->hide_section == 'no')
@if ($content->style == 'style-2')
    @php
        $style = '!px-0';
        $padding = "";
    @endphp
@else
    @php
        $style = '';
        $padding = "py-50";
    @endphp
@endif
    <section
        class="full-img-content bg-lightgold {!! $padding !!} lgscreen:py-30 relative @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid {!! $style !!} relative">
            <div class="full-img-content-inner relative h-[585px] bg-cover"
                @if (isset($content->image) && $content->image) style="background-image: url('{!! $content->image['url'] !!}')" @endif>
                <div class="relative z-9 h-full flex flex-col justify-center items-center px-20 text-center">
                    <div class="title-white w-[600px] lgscreen:w-full px-15">
                        @if (isset($content->tag) && $content->tag)
                            <span>{!! $content->tag !!}</span>
                        @endif
                        @if (isset($content->title) && $content->title)
                            <h4>{!! $content->title !!}</h4>
                        @endif
                    </div>
                    @if (isset($content->description) && $content->description)
                        <div class="content white w-[600px] lgscreen:w-full px-15">
                            {!! $content->description !!}
                        </div>
                    @endif
                    @if (isset($content->button) && !empty($content->button))
                        <div class="btn-custom mt-10">
                            <a href="{!! $content->button['url'] !!}" target="{{ $content->button['target'] ? $content->button['target'] : '_self' }}" class="btn btn-gold">{!! $content->button['title'] !!}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
