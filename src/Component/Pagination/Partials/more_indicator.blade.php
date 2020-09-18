@icon([
    'icon' => 'more_horiz',
    'size' => 'md',
    'attributeList' => [
        'style' => 'line-height: 40px;'
    ]
])
@endicon

<{{$listItem}} class="{{$baseClass}}__item">
    <a class="{{$baseClass}}__link" href="{{ $lastItem['href'] }}" aria-label="{{ $lastItem['label'] }}">
        <span class="{{$baseClass}}__label">
            {{ $lastItem['key'] +1 }}
        </span>
    </a>
</{{$listItem}}>