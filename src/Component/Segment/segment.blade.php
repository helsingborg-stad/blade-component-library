<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>

    @if ($background_video)
        <video autoplay muted loop id="myVideo" class="{{ $baseClass }}__background--video">
            <source src="{{ $background_video }}" type="video/mp4">
        </video>
    @endif

    @if (!empty($top) || !empty($title) || !empty($sub_title))
        @include('Segment.sub.top')
    @endif

    @if (!empty($slot) || !empty($main) || !empty($text))
        @include('Segment.sub.main')
    @endif

    @if (!empty($bottom))
        @include('Segment.sub.bottom')
    @endif
</section>