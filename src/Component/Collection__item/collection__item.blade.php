<!-- collection__item.blade.php -->
<{{$elementType}} href="{{$link}}" id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    
    @if($prefix) 
        {!! $prefix !!}
    @endif

    @if($icon) 
        <div class="c-collection__icon">
            @icon(['icon' => $icon, 'size' => 'md'])
            @endicon
        </div>
    @endif

    @if($slotHasData)
        <div class="c-collection__content">
            {!! $slot !!}
        </div>
    @endif

    @if($secondary) 
        <div class="c-collection__secondary">
            {!! $secondary !!}
        </div>
    @endif

    @if($action) 
        <div class="c-collection__secondary">
            @if($action['link'])
                @button(['style' => 'basic', 'href' => $action['link'], 'icon' => $action['icon'], 'size' => 'md'])
                @endbutton
            @else
                @icon(['icon' => $action['icon'], 'size' => 'md'])
                @endicon
            @endif
        </div>
    @endif

    @if($subItemExists)
        @collection(['subCollection' => true])
            {!! $subItem !!}
        @endcollection
    @endif

</{{$elementType}}>