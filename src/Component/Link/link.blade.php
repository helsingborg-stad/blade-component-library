@if($href)
    <a id="{{ $id }}" class="{{ $class }}" target="{{ $target }}" href="{{ $href }}" {!! $attribute !!}>
        {!! $slot !!}
    </a>
@else 
    <span id="{{ $id }}" class="{{ $class }}">    
        {!! $slot !!}
    </span>
@endif