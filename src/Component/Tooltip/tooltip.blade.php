<{{ $componentElement }}
    @if($isLink)
        href="{{ $href }}"
    @endif
    class="{{ $class }}"
    js-bind-hover="tooltip"
    title="{{ $title }}"
    data-placement="{{ $placement }}">
    {{$beforeContent}} {{ $slot }} {{$afterContent}}
</{{ $componentElement }}>
