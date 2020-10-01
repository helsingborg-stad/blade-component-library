<!-- collection.blade.php -->
<{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @foreach($list as $item)
      <{{$itemType}}>

      </{{$itemType}}>
    @endforeach
</{{$elementType}}>