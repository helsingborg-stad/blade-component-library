<!-- notice.blade.php -->
@if($slot)
<div class="{{ $class }}">

    @if($icon)
        @icon($icon)
        @endicon
    @endif
    
    <span class="{{$baseClass}}__label">
        {{ $slot }}
    </span>
</div>
@else
<!-- No notice content -->
@endif