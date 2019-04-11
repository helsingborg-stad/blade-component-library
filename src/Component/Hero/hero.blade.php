<!-- hero.blade.php -->
@if($componentShow)
    <{{$componentElement}} class="{{ $class }}" style="background-image="{!!$background!!}">

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