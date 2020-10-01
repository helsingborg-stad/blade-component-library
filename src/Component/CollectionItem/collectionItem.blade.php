<!-- collectionItem.blade.php -->
<{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}> AKTIV(CURRENT) / OPEN 
    {!! $slot !!}
    @if($subItemExists)
        @collection('subCollection' => true)
            {!! $subItem !!}
        @endcollection
    @endif
</{{$elementType}}>