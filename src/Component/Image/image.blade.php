<!-- image.blade.php -->
<figure class="{{ $class }}">
    @if($src) 
        <img src="{{$src}}" alt="{{$alt}}" />
        @if($caption)
            <figcaption>{{$caption}}</figcaption>
        @endif
    @else
    <div class="placeholder" aria-label="{{$alt}}">{{ $placeholderText }}</div>
    @endif
</figure>