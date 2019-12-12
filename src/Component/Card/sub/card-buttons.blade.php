@foreach ($buttons as $indexKey => $button)
    @button([
        'href' => $button["href"],
        'text' => $button["text"],
        'toggle' => true,
        'isOutlined' => false,
        'color' => $button["color"],
        'attributeList' => ['tabindex' => $indexKey],
        'classList' => [$baseClass."__button"],
        'isTextButton' => $button["isTextButton"]
    ])
    @endbutton
@endforeach