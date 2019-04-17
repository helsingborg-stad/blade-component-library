<!-- icon.blade.php -->
@if($icon)
    <i class="{{ $class }} {{$classPrefix}}{{$icon}}{{$classSuffix}}"></i>
    @if($slot)
    <span class="{{$baseClass}}__label">{{$slot}}</span>
    @endif
@else 
<!-- No icon defined -->
@endif