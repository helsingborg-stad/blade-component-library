{{-- Accordion Item --}}
<{{$sectionElement}} class="{{ $class }} {{$baseClass}}__section" {!! $attribute !!}>
    <{{$sectionHeadingElement}} class="{{$baseClass}}__button" aria-controls="{{ $baseClass }}__aria-{{ $id }}-hej" aria-expanded="false" js-expand-button>
        <span class="{{$baseClass}}__button-wrapper" tabindex="-1">
            {!!$beforeHeading!!}

            {!! $heading !!}

                @if($taxonomyPosition === 'top' && $taxonomy > 0)
                    @tags([
                        'tags' => $taxonomy
                    ])
                    @endtags
                @endif

            {!!$afterHeading!!}

            @icon(['icon' => 'keyboard_arrow_down', 'size' => 'md', 'classList' => [$baseClass . '__icon']])
            @endicon
        </span>

        </{{$sectionHeadingElement}}>

            <{{$sectionContentElement}} class="{{$baseClass}}__content" id="{{ $baseClass }}__aria-{{ $id }}-hej" aria-hidden="true">
            
            {!!$beforeContent!!}
                {!! $slot !!}
            {!!$afterContent!!}

        @if($taxonomyPosition === 'below' && $taxonomy > 0)
            @tags([
                'tags' => $taxonomy
            ])
            @endtags
        @endif
    </{{$sectionContentElement}}>
</{{$sectionElement}}>
{{-- End Accordion Item --}}