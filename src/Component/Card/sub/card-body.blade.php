 @if($title['position'] === 'body' && $title['text'])
        @if($href)
            <a class="{{$baseClass}}__link" href="{{$href}}">
                @typography([
                    'variant' => "h3",
                    'element' => "h3",
                    'classList' => [$baseClass."__title"]
                ])
                {{$title['text']}}
                @endtypography
            </a>
        @else
            @typography([
                'variant' => "h3",
                'element' => "h3",
                'classList' => [$baseClass."__title"]
            ])
            {{$title['text']}}
            @endtypography
        @endif
    @endif

    @if($byline['position'] === 'body')
        @heading([
            'label' => $byline["text"],
            'level' => 4,
            'classList' => [$baseClass."__byline"]
        ])
        @endbutton
    @endif

    @if($content)
        @if($href)
            <a class="{{$baseClass}}__link" href="{{$href}}">
                @typography([
                    'variant' => "p",
                    'element' => "p",
                    'classList' => [$baseClass."__text"]
                ])
                    {{$content}}
                @endtypography
            </a>
        @else
            @typography([
                'variant' => "p",
                'element' => "p",
                'classList' => [$baseClass."__text"]
            ])
                {{$content}}
            @endtypography
        @endif
    @endif
