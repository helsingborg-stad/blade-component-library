<!-- card.blade.php -->
<div class="{{$class}}" data-equal-item>

    {{$top}}

    @if($image)
        @if($href) 
            <a class="{{$baseClass}}__link" href="{{$href}}">
                <img class="{{$baseClass}}__image" src="{{$image}}" alt="{{$alt}}">
            </a>
        @else
        <img class="{{$baseClass}}__image" src="{{$image}}" alt="{{$alt}}">
        @endif
    @endif

    {{ $slot }}

    @if($showBody)
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

            @if($byline)
                @if($href) 
                    <a class="{{$baseClass}}__link" href="{{$href}}">
                        <p class="{{$baseClass}}__byline">{{$byline}}</p>
                    </a>
                @else
                <p class="{{$baseClass}}__byline">{{$byline}}</p>
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

    {{ $bottom }}

</div>