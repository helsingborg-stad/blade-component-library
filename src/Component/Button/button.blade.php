<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" target="{{ $target }}" aria-pressed="{{$pressed}}" href="{{ $href }}" {!! $attribute !!}>   
    <{{$labelElement}} class="{{$baseClass}}__label">
        @if($isIconButton)
            @icon(['icon' => $icon['name'], 'color' => $icon['color'], 'size' => $size, 
            'classList' => array("u-rounded--full")])
            @endicon
        @elseif($icon)
                <span class="{{$baseClass}}__label-text{{$labelMod}}">
                    {{$text}}
                </span>
                <span class="{{$baseClass}}__label-icon{{$labelMod}}">
                    @icon(
                        ['icon' => $icon['name']]
                    )
                    @endicon
                </span>
        @else
            {{$text}}
        @endif
        
        @if ($slot)
            {{ $slot }}
        @endif
    
    </{{$labelElement}}>
</{{$componentElement}}>