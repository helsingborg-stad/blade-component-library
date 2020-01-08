<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}} c-field__{{$type}}">
    @if ($type === 'radio' || $type === 'checkbox')
        <input {!! $attribute !!} type="{{$type}}"
               class="c-field__{{$type}}--hidden-box"
               id="trigger_{{ $id }}"
               placeholder="{{$label}}"/>
        <label for="trigger_{{ $id }}" class="c-field__{{$type}}--label">
            <span class="c-field__{{$type}}--label-box"></span>
            <span class="c-field__{{$type}}--label-text">{{$label}}</span>
        </label>
    @else
        <input id="input_{{ $id }}"
               value="{{$value}}"
               {!! $attribute !!}
               @if($required)
                   required
                   data-required="1"
                @endif
                placeholder="{{$label}}"
        />
        <label class="c-field__text--label">{{$label}}</label>
    @endif
    <div id="error_input_{{ $id }}_message" class="c-field__input-invalid-message">
        @icon([
            'icon' => 'error',
            'size' => 'sm'
        ])
        @endicon
        <span class="errorText"></span>
    </div>
</div>
