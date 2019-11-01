<{{$componentElement}} class="{{ $class }}" target="{{ $target }}" href="{{ $href }}" {!! $attribute !!}>   
    <{{$labelElement}} class="{{$baseClass}}__label">
    @foreach ($buttons as $button)
        @button([
            'href' => '#btn-3', 
            'isOutlined' => true, 
            'text' => 'Button',
            'icon' => 'apps',
            'size' => 'lg',
            'color' => 'secondary'
        ])
        @endbutton
    @endforeach
    
    </{{$labelElement}}>
</{{$componentElement}}>