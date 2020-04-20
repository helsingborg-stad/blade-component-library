<div id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    <div class="{{$baseClass}}--inner" js-slider-inner>
        {{ $slot }}
    </div>

    @button([
        'text' => '',
        'icon' => 'chevron_left',
        'color' => 'default',
        'style' => 'basic',
        'attributeList' => ['js-slider-btn' => 'prev'],
        'classList' => [
            'c-slider__button',
            'c-slider__button--prev'
        ],
        'label' => 'Slide to previous'
    ])
    @endbutton

    @button([
        'text' => '',
        'icon' => 'chevron_right',
        'color' => 'default',
        'style' => 'basic',
        'attributeList' => ['js-slider-btn' => 'next'],
        'classList' => [
            'c-slider__button',
            'c-slider__button--next'
        ],
        'label' => 'Slide to previous'
    ])
    @endbutton

    @if ($showStepper)
        @steppers(['type' => 'dots'])
        @endsteppers
    @endif
</div>