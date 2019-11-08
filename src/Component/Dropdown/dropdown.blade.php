<{{$componentElement}} class="{{ $class }}" js-toggle-container>   
    <span js-toggle-trigger>
        @button([
            'text' => 'Choose an item',
            'icon' => ['name' => 'arrow-drop-down'],
            'size' => 'md'
        ])
        @endbutton
    </span>
    <div class="{{$baseClass}}__list" js-toggle-single="u-visibility--hidden">
        <ul>
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ol>
    </div>

    
</{{$componentElement}}>