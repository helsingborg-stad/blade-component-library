<!-- notice.blade.php -->
@if(isset($message['text']))
    <div class="{{ $class }} {!! $attribute !!}" {!!$lifeTime!!}>
        <span class="{{$baseClass}}__icon">
            @icon(['icon' => $icon['name'], 'size' => $icon['size'], 'color' => $icon['color']])
            @endicon
        </span>
    <span class="{{$baseClass}}__message--{{$message['size']}}">
            {{ $message['text'] }}
        </span>
    </div>
@endif
