<!-- hero.blade.php -->
@if($componentShow)
    <{{$componentElement}} class="{{ $class }}" style="background-image: url('{!!$backgroundImage!!}'); background-color: {{$backgroundColor}}; height: {{$height}}vh;">

        @if($headline)
        <{{$headingElement}}>{{$headline}}</{{$headingElement}}>
        @endif

        @if($content)
        <{{$contentElement}}>{!! $content !!}</{{$contentElement}}>
        @endif

    </{{$componentElement}}>
@else 
<!-- No hero data defined -->
@endif