<!-- notice.blade.php -->
<div class="{{ $class }}" {!! $attribute !!}>
    
    <span class="{{$baseClass}}__label">
        {{ $slot }}
    </span>
    <span class="{{$baseClass}}__icon">
        @icon(['icon' => $icon, 'size' => 'l'])
        @endicon
    </span>
</div>
