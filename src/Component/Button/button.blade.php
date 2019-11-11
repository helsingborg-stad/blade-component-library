
<{{$componentElement}} class="{{ $class }}" target="{{ $target }}" js-toggle-single="{{$baseClass}}--{{$background}}__toggled" aria-pressed="{{$pressed}}" href="{{ $href }}" {!! $attribute !!}>   
    <{{$labelElement}} class="{{$baseClass}}__label">
        @if(isset($isIconButton))
            @icon(['icon' => $icon['name'], 'color' => $icon['color'], 'size' => $icon['size'], 
            'classList' => array("u-rounded--full")])
            @endicon
        @elseif(isset($icon))
                <span class="{{$baseClass}}__label-text{{$labelMod}}">
                    {{$text}}
                </span>
                <span class="{{$baseClass}}__label-icon{{$labelMod}}">
                    @icon(
                        ['icon' => $icon['name']]
                    )
                    @endicon
                </span>
        @elseif(isset($text))
            {{$text}}
        @endif

        @if ($slot)
            {{ $slot }}
        @endif
    
    </{{$labelElement}}>
</{{$componentElement}}>
