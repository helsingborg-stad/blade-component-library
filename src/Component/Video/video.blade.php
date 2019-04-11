<!-- video.blade.php -->
@if($formats)
    <video width="{{$width}}" height="{{$height}}" {{$controls}} {{$muted}} {{$autoplay}}>

        @foreach($formats as $format)
            <source src="{{$format['src']}}" type="video/{{$format['type']}}">
        @endforeach

        {{$errorMessage}}
    </video>
@else 
<!-- No video data defined -->
@endif