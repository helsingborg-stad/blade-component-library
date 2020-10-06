<div class="{{$baseClass}}__footer" js-toggle-class="u-display--none" js-toggle-item="{{$collpaseID}}">
    @if($buttons)
        @foreach($buttons as $button)
            @button($button)
            @endbutton
        @endforeach 
    @endif

    @if($tags)
        <div class="u-margin__top--2">
            @tags(['tags' => $tags,'classList' => ['u-margin__top--1']])
            @endtags
        </div>
    @endif
</div>