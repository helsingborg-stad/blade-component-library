<!-- segment.blade.php -->
<section id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @if ($background_video)
        @include('Segment.sub.video')
    @endif

    <div class="{{ $baseClass }}__container">
        @if($slotHasData)
            {{$slot}}
        @else
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
        @endif
    </div>
</section>