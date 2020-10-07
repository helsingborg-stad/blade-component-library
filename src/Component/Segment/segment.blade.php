<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @if ($background_video)
        @include('Segment.sub.video')
    @endif

    @if ($slotHasData || $showContainer)
        <div class="{{ $baseClass }}__container">
            {{$slot}}

            @if($title)
                @typography(["variant" => "h1",
                    "element" => "h2",
                    'classList' => [$baseClass.'__heading']
                ])
                    {{ $title }}
                @endtypography
            @endif
        
            @if($sub_title)
                @typography([
                    'variant' => 'body',
                    'element' => 'p',
                    'classList' =>  [$baseClass.'__body']
                ])
                    {{ $sub_title }}
                @endtypography
            @endif
        
            @if(!empty($text))
                @typography([
                    'variant' => 'body',
                    'element' => 'p',
                    'classList' =>  [$baseClass.'__body']
                ])
                    {{ $text}}
                @endtypography
            @endif

            @if (isset($bottom))
                {{ $bottom }}
            @endif
        </div>
    @endif
</section>