@if ($tsContetData)
    @foreach ($tsContetData as $content)
        @if ($content->layout == 'hero_slider')
            @include('partials.sections.hero-banner')
        @elseif($content->layout == 'logo_section')
            @include('partials.sections.logo-section')
        @elseif($content->layout == 'common_section')
            @include('partials.sections.common-section')
        @elseif($content->layout == 'zigzag_section')
            @include('partials.sections.zigzag-section')
        @elseif($content->layout == 'full_image_content')
            @include('partials.sections.full-image-content')
        @elseif($content->layout == 'page_grid_section')
            @include('partials.sections.page-grid-sectiont')
        @elseif($content->layout == 'testimonial_section')
            @include('partials.sections.testimonial-section')
        @endif
    @endforeach
@else
@endif
