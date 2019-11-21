@dropdown([
    'items' => [ ['text' => 'cool', 'link' => '#'], ['text' => 'story', 'link' => '#'], ['text' => 'bro', 'link' => '#']],
    'direction' => $dropdown['direction'],
    'popup' => 'click'
])
@button([
    'isIconButton' =>  true,
    'icon' => [
        'name' => 'more-vert',
        'size' => 'lg',
        'color' => false
    ],
    'classList' => ['u-float--right'],
    'background' => false
    ])
@endbutton
@enddropdown