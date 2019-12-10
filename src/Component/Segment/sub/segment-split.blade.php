<!-- segment.blade.php > /sub/segment-split.blade.php -->
<div class="{{ $baseClass }}__content {{ $baseClass }}--template-{{$template}}">

    <div class="{{ $baseClass }}__column-article">
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
    </div>

    @if($slot == "")
        <div class="{{ $baseClass }}__column-graphics" style="background-image: url('{{ $image }}')">
        </div>
    @else
        <div class="{{ $baseClass }}__column-slot">
            {{ $slot }}
        </div>
    @endif
</div>