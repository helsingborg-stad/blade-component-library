<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>   
    <div id="calendarContainer"></div>
    <div class="{{$baseClass}}__event-list {{$baseClass}}__event-list--hidden">
        <div class="{{$baseClass}}__event-list-close">
            @button([
                'type' => 'filled',
                'icon' => 'close',
                'size' => 'sm',
                'color' => $color
            ])
            @endbutton
        </div>
    </div>
    <div id="organizerContainer"></div>
</{{$componentElement}}>

