<div class="{{$baseClass}}__body {{$collapsible}}" js-toggle-class="{{$baseClass}}--collapse" js-toggle-item="{{$collpaseID}}">
    @if ($content)
        @typography([])
            {{$content}}
        @endtypography
    @endif

    {!! $slot !!}
</div>