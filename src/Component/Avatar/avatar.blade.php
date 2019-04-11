<!-- avatar.blade.php -->
<div class="{{ $class }}">
    @if($image) 
        <img src="{{ $image }}" class="{{$baseClass}}__image"/>
    @endif

    @if($icon) 
        <i class="{{$baseClass}}__icon {{ $icon }}"></i>
    @endif

    @if($initials)
        <span class="{{$baseClass}}__initials">
            {{$initials}}
        </span>
    @endif
</div>