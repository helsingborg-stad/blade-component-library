<{{$componentElement}} class="{{ $class }}" target="{{ $target }}" href="{{ $href }}" {!! $attribute !!}>   
    <{{$labelElement}} class="{{$baseClass}}__label">
        {{ $slot }}
    </{{$labelElement}}>
</{{$componentElement}}>