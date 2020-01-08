<!-- textarea.blade.php -->
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