<!-- card.blade.php -->
<{{ $componentElement }} href="{{ $link }}" id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    @include('Card.sub.head')
    @include('Card.sub.body')
    @include('Card.sub.footer')
</{{ $componentElement }}>