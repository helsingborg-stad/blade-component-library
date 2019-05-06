<!-- card.blade.php -->
<div class="{{$class}}" data-equal-item>

    @if($top)
        <div class="{{$baseClass}}__top">{{ $top }}</div>
    @endif

    @if($image)
        @if($href)
            <a class="{{$baseClass}}__link" href="{{$href}}">
                <img class="{{$baseClass}}__image" src="{{$image}}" alt="{{$alt}}">
            </a>
        @else
            <img class="{{$baseClass}}__image" src="{{$image}}" alt="{{$alt}}">
        @endif
    @endif
        
    @if($slot)
        <div class="{{$baseClass}}__middle">{{ $slot }}</div>
    @endif

    @if($title != ""||$content != "")
        <div class="{{$baseClass}}__body">

            @if($title)
                @if($href)
                    <a class="{{$baseClass}}__link" href="{{$href}}">
                        <h4 class="{{$baseClass}}__title">{{$title}}</h4>
                    </a>
                @else
                    <h4 class="{{$baseClass}}__title">{{$title}}</h4>
                @endif
            @endif

            @if($content)
                @if($href)
                    <a class="{{$baseClass}}__link" href="{{$href}}">
                        <p class="{{$baseClass}}__text">{{$content}}</p>
                    </a>
                @else
                    <p class="{{$baseClass}}__text">{{$content}}</p>
                @endif
            @endif
        </div>
    @endif

    @if($bottom)
        <div class="{{$baseClass}}__bottom">{{ $bottom }}</div>
    @endif
</div>