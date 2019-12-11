<!-- segment.blade.php > /sub/segment-featured.blade.php -->
<div class="{{ $baseClass }}__content">
    <div class="{{ $baseClass }}__article">
        @typography($article_heading)
            {{ $article_heading['slot'] }}
        @endtypography

        @typography(['variant' => 'body', 'element' => 'p'])
            {{ $article_body }}
        @endtypography

        <div class="{{ $baseClass }}__cta">
            @foreach($cta as $button)      
                @button($button)
                @endbutton
            @endforeach
        </div>
    </div>

    <div class="{{ $baseClass }}__slot">
        {{ $slot }}
    </div>
</div>