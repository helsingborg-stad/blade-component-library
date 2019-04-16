<!-- avatar.blade.php -->
<div class="{{ $class }}">
    @if($image) 
        <img src="{{ $image }}" class="{{$baseClass}}__image" alt="{{ $label }}" aria-label="{{ $label }}"/>
    @endif

    @if($icon) 
        <i class="{{$baseClass}}__icon {{ $icon }}" aria-label="{{ $label }}"></i>
    @endif

    @if($initials)
        <span class="{{$baseClass}}__initials" aria-label="{{ $label }}">
            {{$initials}}
        </span>
    @endif
</div>