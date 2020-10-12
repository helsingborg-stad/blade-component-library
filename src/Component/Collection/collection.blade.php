<!-- collection.blade.php -->
<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    
    @if ($list)
        @foreach ($list as $item) 
            @collection__item(['link' => $item['link']])
                {!! $item['content'] !!}
            @endcollection__item
        @endforeach
    @endif

    @if($slotHasData)
        {!! $slot !!}
    @endif
</{{$componentElement}}>