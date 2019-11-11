<{{$componentElement}} class="{{ $class }}" js-toggle-container>   
    
    @button([
        'text' => 'Choose an item',
        'icon' => ['name' => 'arrow-drop-down'],
        'size' => 'md'
    ])
    @endbutton
    
    <div class="{{$baseClass}}__list {{$baseClass}}__list--{{$direction}}" js-toggle-single="u-visibility--visible">
        <div>
        <ul>
            @foreach ($items as $item)
                <li js-toggle-trigger>{{$item}}</li>
            @endforeach
        </ul>
        </div>
    </div>  
    
</{{$componentElement}}>