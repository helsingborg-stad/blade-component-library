<!-- card.blade.php -->
<{{ $componentElement }} href="{{ $link }}" id="{{ $id }}" class="{{$class}}" {!! $attribute !!} data-observe-resizes>
    @includeWhen(!$slotHasData, 'Card.views.base')

    {!! $slot !!}
</{{ $componentElement }}>