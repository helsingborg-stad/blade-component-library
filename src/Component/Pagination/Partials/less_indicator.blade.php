<{{$listItem}} class="{{$baseClass}}__item">
    <a class="{{$baseClass}}__link" href="{{ $firstItem['href'] }}" aria-label="{{ $firstItem['label'] }}">
        <span class="{{$baseClass}}__label">
            {{ $firstItem['key'] +1 }}
        </span>
    </a>
</{{$listItem}}>

@icon([
    'icon' => 'more_horiz',
    'size' => 'md',
    'attributeList' => [
        'style' => 'line-height: 40px;'
    ]
])
@endicon
