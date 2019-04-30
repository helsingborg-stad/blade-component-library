<!-- hero.blade.php -->
@if($componentShow)
    <{{$componentElement}} class="{{ $class }}" style="background-image: url('{!!$backgroundImage!!}'); background-color: {{$backgroundColor}}; height: {{$height}}vh;">

        @if($headline)
        <{{$headingElement}} class="{{$baseClass}}__headline">{{$headline}}</{{$headingElement}}>
        @endif

        @if($content)
        <{{$contentElement}} class="{{$baseClass}}__content">{!! $content !!}</{{$contentElement}}>
        @endif

    </{{$componentElement}}>
@else 
<!-- No hero data defined -->
@endif