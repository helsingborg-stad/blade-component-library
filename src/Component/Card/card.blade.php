<!-- card.blade.php -->
<{{ $componentElement }} href="{{ $link }}" id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    @include('Card.sub.head')

    @if ($content || $slot)
        @include('Card.sub.body')
    @endif
    
    @if ($tags || $buttons)
        @include('Card.sub.footer')
    @endif
</{{ $componentElement }}>