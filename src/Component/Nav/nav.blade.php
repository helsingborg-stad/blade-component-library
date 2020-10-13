<!-- nav.blade.php -->
<nav id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    @if(isset($top_items))
        @include ('Nav.top', array('items' => $top_items, 'appendID' => uniqid(), 'top_level' => true))
    @endif
    @include ('Nav.item', array('items' => $items, 'appendID' => uniqid(), 'top_level' => true))
</nav>