<{{ $componentElement }}
    @if($isLink)
        href="{{ $href }}"
    @endif
    class="{{ $class }} {{ 'c-tooltip__'.$placement }}"
    js-bind-hover="tooltip"
    title="{{ $title }}">
    {{$beforeContent}} {{ $slot }} {{$afterContent}}
</{{ $componentElement }}>
