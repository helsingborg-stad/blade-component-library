<{{ $componentElement }} 
    @if($isLink)
        href="{{ $href }}" 
    @endif
    id="{{ $id }}" 
    class="{{ $class }} {{ 'c-tooltip__'.$placement }}"
    js-bind-hover="tooltip"
    data-title="{{ $title }}" {!! $attribute !!}
    role="tooltip" aria-label="Tooltip: {{ $title }}">
    {{$beforeContent}} {{ $slot }} {{$afterContent}}
</{{ $componentElement }}>
