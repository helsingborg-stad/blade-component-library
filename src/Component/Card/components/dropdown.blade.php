<div class="{{$baseClass}}__dropdown {{$baseClass}}__dropdown--{{$dropdown['buttonColor']}}">
    @dropdown([
        'items' => $dropdown['items'] ,
        'direction' => 'right',
        'popup' => 'click'
        ])
        @button([
            'icon' => 'more_vert',
            'size' => 'lg',
            'style' => 'basic'
        ])
        @endbutton
    @enddropdown
</div>