@if($tags)
    <{{ $componentElement }} class="{{ $class }}">
        @foreach($tags as $tag)
            @link(['href' => $tag['href'], 'class' => 'c-link--tag' ])
                {{ $beforeLabel }}{{ $tag['label'] ?? 'Undefined label' }}{{ $afterLabel }}
            @endlink
        @endforeach
    </{{ $componentElement }}>
@endif
