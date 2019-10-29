<!-- notice.blade.php -->
@if(isset($message))
    <div class="{{ $class }} {!! $attribute !!}">
        <span class="{{$baseClass}}__icon">
            @icon(['icon' => $icon, 'size' => 'l'])
            @endicon
        </span>
        <span class="{{$baseClass}}__label">
            {{ $message }}
        </span>
    </div>
@endif
