
@buttonGroup(['attributeList' => ['js-split' => ''], 'borderColor' => $borderColor])
    @button(['color' => $color, 'text' => $buttonText])
    @endbutton
    @dropdown([
    'items' => $items,
    'direction' => $dropdownDirection,
    'popup' => 'click',
    'itemElement' => 'div'
    ])
        @button([
            'icon' => $icon,
            'size' => 'md',
            'color' => $color
        ])
        @endbutton
    @enddropdown
@endbuttonGroup
