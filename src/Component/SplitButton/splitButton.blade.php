
@buttonGroup(['attributeList' => ['js-split' => '']])
    @button(['text' => $buttonText])
    @endbutton
    @dropdown([
    'items' => $items,
    'direction' => $dropdownDirection,
    'popup' => 'click',
    'itemElement' => 'div'
    ])
        @button([
            'isIconButton' => true,
            'icon' => $icon,
            'size' => 'md'
            
        ])
        @endbutton
    @enddropdown
@endbuttonGroup
