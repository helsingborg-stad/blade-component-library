<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>

    @if ($background_video)
        @video([
            'hasControls' => false,
            'isMuted' => true,
            'shouldAutoplay' => true,
            'attributeList' => [
                'loop' => true
            ],
            'classList' => [
                $baseClass."__background--video"
            ],
            'formats' => [
                ['src' => $background_video, 'type' => "mp4"],
            ]
        ])
        @endvideo
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