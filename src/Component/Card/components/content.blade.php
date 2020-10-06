@if($collapsible)
<div class="{{$collapsible}}" js-toggle-class="{{$baseClass}}--collapse" js-toggle-item="{{$collpaseID}}">
@endif
    @typography([])
        {!! $content !!}
    @endtypography
@if($collapsible)
</div>
@endif