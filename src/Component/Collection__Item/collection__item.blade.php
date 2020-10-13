<!-- collection__item.blade.php -->
<{{$componentElement}} id="{{$id}}" class="{{$class}}" {!!$attribute!!}>
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
            {!!$slot!!}
        </div>
    @endif

    @if($secondary) 
        <div class="c-collection__secondary">
            {!! $secondary !!}
        </div>
    @endif

    @if($action) 
        <div class="c-collection__secondary">
            @link(['href' => $action['link']])
                @icon(['icon' => $action['icon'], 'size' => 'md'])
                @endicon
            @endlink
        </div>
    @endif
</{{$componentElement}}>