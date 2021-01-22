<{{ $componentElement }} 
    @if($isLink)
        href="{{ $href }}" 
    @endif
    id="{{ $id }}" 
    class="{{ $class }}"
    {!! $attribute !!}
    >
    {{$beforeContent}} {{ $slot }} {{$afterContent}}
</{{ $componentElement }}>
