<!-- icon.blade.php -->
@if($icon)
    <{{$componentElement}} class="{{ $class }} {{$classPrefix}}{{$icon}}{{$classSuffix}}"></{{$componentElement}}>
    @if($slot)
    <span class="{{$baseClass}}__label">{{$slot}}</span>
    @endif
@else 
<!-- No icon defined -->
@endif