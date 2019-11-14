<!-- card.blade.php -->
<div class="{{$class}}" {!! $attribute !!}>

    @paper()

        @if($top)
            <div class="{{$baseClass}}__top">{{ $top }}</div>
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

        @if($title != ""||$content != "")
            <div class="{{$baseClass}}__body">

                @if($title)
                    @if($href)
                        <a class="{{$baseClass}}__link" href="{{$href}}">
                            @typography([
                                'variant' => "h2",
                                'element' => "h4",
                                'classList' => [$baseClass."__title"]
                            ])
                                {{$title}}
                            @endtypography
                        </a>
                    @else
                        @typography([
                            'variant' => "h4",
                            'element' => "h4",
                            'classList' => [$baseClass."__title"]
                        ])
                            {{$title}}
                        @endtypography
                    @endif
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

        @if($bottom)
            <div class="{{$baseClass}}__bottom">{{ $bottom }}</div>
        @endif

    @endpaper

</div>