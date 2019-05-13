<!-- hero.blade.php -->
@if($componentShow)
    <{{$componentElement}} class="{{ $class }}" style="background-image: url('{!!$backgroundImage!!}'); background-color: {{$backgroundColor}}; height: {{$height}}vh;">

        <div class="{{$baseClass}}__body">

            <div class="{{ $baseClass }}__content">

                @if($headline)
                <{{$headingElement}} class="{{$baseClass}}__headline">{{$headline}}</{{$headingElement}}>
                @endif

                @if($content)
                <{{$contentElement}} class="{{$baseClass}}__paragraph">{!! $content !!}</{{$contentElement}}>
                @endif
            
            </div>

            <div class="{{ $baseClass }}__complementary-image" style="background-image: url('{!!$complementaryImage!!}');"></div>

        </div>

    </{{$componentElement}}>
@else 
<!-- No hero data defined -->
@endif