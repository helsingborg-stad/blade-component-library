<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}} c-field__{{$type}}">
    @if(!$textarea)
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
    @else
        <textarea {!! $attribute !!}
            placeholder="{{$label}}">
        </textarea>
        <label class="c-field__textarea--label">{{$label}}</label>
        <div id="error_{{ $id }}_message" class="c-field__textarea-invalid-message"></div>
        <div id="error_input_{{ $id }}_message" class="c-field__textarea-invalid-message">
            @icon([
                'icon' => 'error',
                'size' => 'sm'
            ])
            @endicon
            <span class="errorText"></span>
        </div>
    @endif
</div>
