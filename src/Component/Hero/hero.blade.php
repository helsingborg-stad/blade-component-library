<!-- hero.blade.php -->
@if($componentShow)
    <{{$componentElement}} class="{{ $class }}" style="background-image: url('{!!$backgroundImage!!}'); background-color: {{$backgroundColor}}; height: {{$height}}vh;">

        <div class="{{$baseClass}}__body">

            <div class="{{ $baseClass }}__content">

                @if($headline)
                <{{$headingElement}} class="{{$baseClass}}__headline">{{$headline}}</{{$headingElement}}>
                @endif

                @if($byline)
                <{{$bylineElement}} class="{{$baseClass}}__byline">{{$byline}}</{{$bylineElement}}>
                @endif

                @if($content)
                <{{$contentElement}} class="{{$baseClass}}__paragraph">{!! $content !!}</{{$contentElement}}>
                @endif
            
            </div>

            <div class="{{ $baseClass }}__complementary-image u-display-none-xs u-display-none-sm" style="background-image: url('{!!$complementaryImage!!}');"></div>

        </div>

    </{{$componentElement}}>
@else 
<!-- No hero data defined -->
@endif