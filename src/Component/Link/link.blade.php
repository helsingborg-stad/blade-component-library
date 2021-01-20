@if($href)
    <a id="{{ $id }}" class="{{ $class }}" target="{{ $target }}" href="{{ $href }}" role="link" {!! $attribute !!}>
        {!! $slot !!}
    </a>
@elseif(!$href && $keepContent)
    <{{$componentElement}} id="{{ $id }}" class="{{ $class }}" role="link">    
        {!! $slot !!}
    </{{$componentElement}}>
@endif