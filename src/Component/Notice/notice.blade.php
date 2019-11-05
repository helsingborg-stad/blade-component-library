<!-- notice.blade.php -->

    <div class="{{ $class }} {!! $attribute !!}">
        @if(isset($icon))
            <span class="{{$baseClass}}__icon">
                @icon(['icon' => $icon['name'], 'size' => $icon['size'], 'color' => $icon['color']])
                @endicon
            </span>
        @endif
    <span class="{{$baseClass}}__message--{{$message['size']}}">
        @if(isset($message['text']))
            {{ $message['text'] }}
        @endif
        {{ $slot }}
        </span>
    </div>

