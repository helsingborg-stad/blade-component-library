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