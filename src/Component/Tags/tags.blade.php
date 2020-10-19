@if(!empty($tags))
    <{{ $componentElement }} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
        @foreach($tags as $tag)

            @if(isset($tag['href']) && !empty($tag['href']))
                @link(['href' => $tag['href'], 'classList' => ['c-tag', 'c-tag--'.  $tag['color']] ])
                    {{ $beforeLabel }}{{ $tag['label'] ?? 'Undefined label' }}{{ $afterLabel }}
                @endlink
            @else 
                <span class="c-tag c-tag--{{ $tag['color'] }}">
                    {{ $beforeLabel }}{{ $tag['label'] ?? 'Undefined label' }}{{ $afterLabel }}
                </span>
            @endif
        @endforeach
    </{{ $componentElement }}>
@endif
