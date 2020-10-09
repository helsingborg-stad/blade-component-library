<!-- collectionItem.blade.php -->
<{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    {!! $slot !!}
    @if($subItemExists)
        @collection(['subCollection' => true])
            {!! $subItem !!}
        @endcollection
    @endif
</{{$elementType}}>