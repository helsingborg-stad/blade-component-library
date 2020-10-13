<!-- nav.blade.php -->
<nav id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    @include(
        'Nav.item', 
        array(
            'items' => $items, 
            'appendID' => uniqid(),
            'topLevel' => true
        )
    )
</nav>