<!-- notice.blade.php -->
@if($content)
<div class="{{ $class }}">
    {{ $content or '' }}
</div>
@else
<!-- No notice content -->
@endif