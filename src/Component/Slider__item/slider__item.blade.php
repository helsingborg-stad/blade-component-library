<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!} js-slider-slide>
    @if ($link)
        <a class="{{ $baseClass }}__link" href="{{ $link }}">
    @endif

    @if ($background_video)
        @include('Slider__item.sub.video')
    @endif

    @if ($desktop_image)
        <img class="{{ $baseClass }}__image" src="{{ $desktop_image }}"/>
    @endif

    @if ($mobile_image)
        <img class="{{ $baseClass }}__image__mobile" src="{{ $mobile_image }}"/>
    @endif

    @if ($slotHasData || $showContainer)
        <div class="{{ $baseClass }}__container">
            {{$slot}}

            @if($title)
                @typography([
                    "variant" => "h2",
                    "element" => "h2",
                    'classList' => [$baseClass.'__heading']
                ])
                    {{ $title }}
                @endtypography
            @endif
        
            {{-- @if($sub_title)
                @typography([
                    'variant' => 'body',
                    'element' => 'p',
                    'classList' =>  [$baseClass.'__body']
                ])
                    {{ $sub_title }}
                @endtypography
            @endif --}}
        
            @if(!empty($text))
                @typography([
                    'variant' => 'body',
                    'element' => 'p',
                    'classList' =>  [
                        $baseClass.'__body',
                        !($title) ? 'u-margin__top--0' : '',
                    ]
                ])
                    {{ $text}}
                @endtypography
            @endif

            @if (isset($bottom))
                {{ $bottom }}
            @endif
        </div>
    @endif

    @if ($link)
        </a>
    @endif
</section>