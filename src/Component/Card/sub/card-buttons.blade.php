@foreach ($buttons as $indexKey => $button)
    @button([
        'href' => $button["href"],
        'text' => $button["text"],
        'toggle' => true,
        'isOutlined' => false,
        'color' => $button["color"],
        'classList' => [$baseClass."__button"]
    ])
    @endbutton
@endforeach