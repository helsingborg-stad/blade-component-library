<div id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    <div class="{{$baseClass}}__container">
        <div class="{{$baseClass}}__inner" js-slider-inner>
            {{ $slot }}
        </div>
    </div>

    @button([
        'text' => '',
        'icon' => 'chevron_left',
        'color' => 'default',
        'style' => 'basic',
        'attributeList' => ['js-slider-btn' => 'prev'],
        'classList' => [
            'c-slider__button',
            'c-slider__button-prev'
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
            'c-slider__button-next'
        ],
        'label' => 'Slide to previous'
    ])
    @endbutton

    @if ($showStepper)
        <div class="{{$baseClass}}__steppers" js-slider__stepper>
            <div class="{{$baseClass}}__dot"></div>
        </div>
    @endif
</div>