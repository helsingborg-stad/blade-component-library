@if($href)
    <a id="{{ $id }}" class="{{ $class }}" target="{{ $target }}" href="{{ $href }}" {!! $attribute !!}>
        {!! $slot !!}
    </a>
@elseif(!$href && $keepContent)
    <{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>    
        {!! $slot !!}
    </{{$componentElement}}>
@endif