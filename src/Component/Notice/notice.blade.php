<!-- notice.blade.php -->

    <div id="{{ $id }}" class="{{ $class }}" {!! $attribute !!} aria-labelledby="notice__text__{{ $id }}">
        @if(isset($icon) && is_array($icon) && !empty($icon))
            <span class="{{$baseClass}}__icon">
                @icon(['icon' => $icon['name'], 'size' => $icon['size']])
                @endicon
            </span>
        @endif
    <span id="notice__text__{{ $id }}" for="" class="{{$baseClass}}__message--{{$message['size']}}">
        @if(isset($message['text']))
            {!! $message['text'] !!}
        @endif
        {!! $slot !!}
        </span>
    </div>

