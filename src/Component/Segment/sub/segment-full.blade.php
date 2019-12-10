<!-- segment.blade.php > /sub/segment-full.blade.php -->
<div class="{{ $baseClass }}__content">
  <div class="{{ $baseClass }}__article">
    
    @if($article_heading)
      <div class="{{ $baseClass }}__heading">
        @typography($article_heading)
            {{ $article_heading['slot'] }}
        @endtypography
      </div>  
    @endif

    @if($article_body)
      <div class="{{ $baseClass }}__body">
        {{ $article_body }}
      </div>
    @endif

    <div class="{{ $baseClass }}__cta">
      @foreach($cta as $button)      
        @button($button)
        @endbutton
      @endforeach
    </div>


  </div>
</div>