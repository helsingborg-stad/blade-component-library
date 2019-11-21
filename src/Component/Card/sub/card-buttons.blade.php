@foreach ($buttons as $indexKey => $button)
    @button([
    'href' => $button["href"],
    'text' => $button["text"],
    'toggle' => true,
    'isOutlined' => true,
    'color' => 'default',
    'attributeList' => ['tabindex' => $indexKey],
    'classList' => [$baseClass."__button"]
    ])
    @endbutton
@endforeach