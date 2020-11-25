<!-- card.blade.php -->
<{{ $componentElement }} href="{{ $link }}" id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    @includeWhen(!$slotHasData, 'Card.views.base')

    {!! $slot !!}
</{{ $componentElement }}>