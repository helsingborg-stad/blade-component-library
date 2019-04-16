<!-- notice.blade.php -->
@if($slot)
<div class="{{ $class }}">
    <span class="{{$baseClass}}__label">
        {{ $slot }}
    </span>
</div>
@else
<!-- No notice content -->
@endif