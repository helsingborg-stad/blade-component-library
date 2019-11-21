@dropdown([
    'items' => [ ['text' => 'cool', 'link' => '#'], ['text' => 'story', 'link' => '#'], ['text' => 'bro', 'link' => '#']],
    'direction' => 'left',
    'popup' => 'click'
])
@button([
    'isIconButton' =>  true,
    'icon' => [
        'name' => 'more-vert',
        'size' => 'lg',
    ],
    'classList' => ['u-float--right'],
    'background' => false
    ])
@endbutton
@enddropdown