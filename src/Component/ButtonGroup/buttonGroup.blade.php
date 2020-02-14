<div id="{{ $id }}" class="{{$class}}" {{$container}} {!!$attribute!!}>
    {{$slot}}
    @if(isset($buttons) && !empty($buttons))
        @foreach ($buttons as $button)
            @button($button)
            @endbutton
        @endforeach
    @endif
</div>
