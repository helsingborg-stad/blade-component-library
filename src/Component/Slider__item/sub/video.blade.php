@video([
    'hasControls' => false,
    'isMuted' => true,
    'shouldAutoplay' => true,
    'attributeList' => [
        'loop' => true,
    ],
    'classList' => [
        $baseClass."__background--video"
    ],
    'formats' => [
        ['src' => $background_video, 'type' => "mp4"],
    ]
])
@endvideo

@button([
    'style'         => 'filled',
    'icon'          => 'play_arrow',
    'size'          => 'md',
    'color'         => 'secondary',
    'classList'     => [
        $baseClass.'__background--video__play__btn'
    ],
    'attributeList' => [
        'js-video-control' => ''
    ]
])
@endbutton