<!-- icon.blade.php -->
@if($icon)
<i class="{{ $class }} {{$classPrefix}}{{$icon}}{{$classSuffix}}"></i>{{$label}}
@else 
<!-- No icon defined -->
@endif