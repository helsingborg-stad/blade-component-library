<{{ $componentElement }}
    @if($isLink)
        href="{{ $href }}"
    @endif
    class="{{ $class }} {{ '__tooltip-'.$placement }}"
    js-bind-hover="tooltip"
    title="{{ $title }}">
    {{$beforeContent}} {{ $slot }} {{$afterContent}}
</{{ $componentElement }}>
