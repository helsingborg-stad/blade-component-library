<!-- collectionItem.blade.php -->
<{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    {!! $slot !!}
    @if($subItemExists)
        @collection()
            {!! $subItem !!}
        @endcollection
    @endif
</{{$elementType}}>