<!-- collection.blade.php -->
<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    
    @if ($list)
        @foreach ($list as $item) 
            @collection__item()
                {!! $item !!}
            @endcollection__item
        @endforeach
    @endif

    {!! $slot !!}

</{{$componentElement}}>