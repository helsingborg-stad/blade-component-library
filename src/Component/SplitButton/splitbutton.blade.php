
@buttonGroup(['attributeList' => ['js-split' => '']])
    @button(['background' => $backgroundColor, 'text' => $buttonText])
    @endbutton
    @dropdown([
    'items' => $items,
    'direction' => $dropdownDirection,
    'popup' => 'click'
    ])
        @button([
            'isIconButton' => true,
            'icon' => $icon,
            'size' => 'md',
            'background' => $backgroundColor
            
        ])
        @endbutton
    @enddropdown
@endbuttonGroup
