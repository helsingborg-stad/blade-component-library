<div class="c-card">
    @if($image)
    <img class="c-card__image" src="{{$image}}">
    @endif
    <div class="c-card__body">
        @if($title)
        <h4 class="c-card__title">{{$title}}</h4>
        @endif
        @if($content)
        <p class="c-card__text">{{$content}}</p>
        @endif

        Test directive here: @cobutton(['href' => 'http://sebastianthulin.se', 'slot' => "Min hemsida"])

        @component('button.button')
    
            Button text

            @slot('href')
                https://helsingborg.se
            @endslot

        @endcomponent

    </div>
</div>
