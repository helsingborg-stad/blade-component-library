<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @if (!empty($top) || !empty($title) || !empty($sub_title))
        @include('segment.sub.top')
    @endif

    @if (!empty($slot) || !empty($main) || !empty($text))
        @include('segment.sub.main')
    @endif

    @if (!empty($bottom))
        @include('segment.sub.bottom')
    @endif
</section>