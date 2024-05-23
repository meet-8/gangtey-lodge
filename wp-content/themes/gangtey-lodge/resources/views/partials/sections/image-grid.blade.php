@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->style == 'style-1')
        <section
            class="zigzag-img-grid bg-add py-45 lgscreen:py-30 relative  @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid relative">
                <div class="flex flex-wrap lg:mx-minus-15 mx-0 gap-y-5">
                    @if (isset($content->left_image) && $content->left_image)
                        <div class="lg:w-8/12 w-full lg:px-15 px-0">
                            <div class="img">
                                <img src="{!! $content->left_image['url'] !!}" alt="{!! $content->left_image['alt'] !!}">
                            </div>
                        </div>
                    @endif
                    @if (isset($content->right_image) && $content->right_image)
                        <div class="lg:w-4/12 w-full lg:px-15 px-0">
                            <div class="img">
                                <img src="{!! $content->right_image['url'] !!}" alt="{!! $content->right_image['alt'] !!}">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @elseif($content->style == 'style-2')
        <section class="img-column-grid @if ($content->extra_class) {!! $content->extra_class !!} @endif"
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid">
                <div class="flex flex-wrap md:mx-minus-15 mx-0 gap-y-4">
                    @if (isset($content->left_image) && $content->left_image)
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="{!! $content->left_image['url'] !!}" alt="{!! $content->left_image['alt'] !!}">
                            </div>
                        </div>
                    @endif
                    @if (isset($content->centre_image) && $content->centre_image)
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="{!! $content->centre_image['url'] !!}" alt="{!! $content->centre_image['alt'] !!}">
                            </div>
                        </div>
                    @endif
                    @if (isset($content->right_image) && $content->right_image)
                        <div class="md:w-4/12 w-full md:px-15 px-0">
                            <div class="img">
                                <img src="{!! $content->right_image['url'] !!}" alt="{!! $content->right_image['alt'] !!}">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
@endif
