<!-- icon.blade.php -->
@if($icon)
    <{{$componentElement}} id="{{ $id }}" class="{{ $class }} {{$classPrefix}}{{$icon}}{{$classSuffix}}" {!! $attribute !!}>
        @if($slot)
            <span class="{{$baseClass}}__label">{{$slot}}</span>
        @endif
    </{{$componentElement}}>
@else 
<!-- No icon defined -->
@endif