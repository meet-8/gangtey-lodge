@if (isset($content->hide_section) && $content->hide_section == 'no')

    @if (isset($content->logo_images) && $content->logo_images)
        <section
            class="common-content logo-section py-20 lgscreen:py-20 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="logos  w-full pb-20 py-20 bottom-0 ipad:px-20 smscreen2:pb-20 invert">
                <ul class="flex flex-wrap justify-center items-center gap-x-5 relative">
                    @foreach ($content->logo_images as $img)
                        <li>
                            <img class="max-w-[8rem] ipad:max-w-[100px]" src="{!! $img['image']['url'] !!}"
                                alt="{!! $img['image']['alt'] !!}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif


@endif
