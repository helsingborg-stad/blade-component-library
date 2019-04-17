<!-- avatar.blade.php -->
<div class="{{ $class }}">
    @if($image) 
        <img src="{{ $image }}" class="{{$baseClass}}__image" alt="{{ $label }}" aria-label="{{ $label }}"/>
    @endif

    @if($icon) 
        <span class="{{$baseClass}}__icon" aria-label="{{ $label }}">
            @icon($icon)
            @endicon
        </span>
    @endif

    @if($initials)
        <span class="{{$baseClass}}__initials" aria-label="{{ $label }}">
            {{$initials}}
        </span>
    @endif
</div>