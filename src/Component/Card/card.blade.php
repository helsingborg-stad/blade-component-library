<!-- card.blade.php -->
<div class="{{$class}}" {!! $attribute !!}>

    @paper([
        'classList' => [$baseClass.'__paper']
    ])

    @if($top)
        <div class="{{$baseClass}}__top">{{ $top }}</div>
    @endif

    @if($title['position'] === 'top' && $title['text'])
        <div class="{{$baseClass}}__top-title @if($avatar) {{$baseClass}}__with-avatar @endif">
            @if($avatar)
                @avatar([
                    'image' => $avatar["image"],
                    'name' => $avatar["name"]
                ])
                @endavatar
            @endif
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

            @if($byline['position'] === 'top')
                @heading([
                    'label' => $byline["text"],
                    'level' => 4,
                    'classList' => [$baseClass."__byline"]
                ])
                @endheading
            @endif
        </div>
    @endif

    @if($image)
        @if($href)
            <a class="{{$baseClass}}__link {{$baseClass}}__image-link" href="{{$href}}">
                @image([
                    'src'=> $image,
                    'alt' => $alt,
                    'classList' => [$baseClass."__image"]
                ])
                @endimage
            </a>
        @else
            @image([
                'src'=> $image,
                'alt' => $alt,
                'classList' => [$baseClass."__image"]
            ])
            @endimage
        @endif
    @endif

    @if($slot != "")
        <div class="{{$baseClass}}__middle">{{ $slot }}</div>
    @endif

    @if($showBody)
        <div class="{{$baseClass}}__body">

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
        </div>
    @endif

    @if($showFooter)
        <div class="{{$baseClass}}__bottom">
            @if($tbottom)
                <div class="{{$baseClass}}__top">{{ $bottom }}</div>
            @endif
            @if($buttons)
                @foreach ($buttons as $button)
                    @button([
                        'href' => $button["href"],
                        'text' => $button["text"],
                        'toggle' => true,
                        'isOutlined' => true,
                        'color' => 'default',
                        'attributeList' => ['js-toggle-trigger' => ''],
                        'classList' => [$baseClass."__button"]
                    ])
                    @endbutton
                @endforeach
            @endif
            @if($icons)
                @foreach ($icons as $icon)
                    @button([
                        'isIconButton' =>  true,
                        'icon' => [
                            'name' => $icon["name"],
                            'color' => $icon["color"],
                            'size' => $icon["size"],
                        ],
                        'attributeList' => [
                            'onClick' => $icon["trigger"]
                        ],
                        'classList' => $icon["classList"],
                        'background' => false
                    ])
                    @endbutton
                @endforeach
            @endif

            @if($tbottom)
                {{ $bottom }}
            @endif

        </div>
    @endif

    @endpaper

</div>