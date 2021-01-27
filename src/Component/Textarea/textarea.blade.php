<!-- textarea.blade.php -->
<div class="{{$class}}" role="textarea">
    <textarea id="{{$id}}" {!! $attribute !!}>{{$value}}</textarea>
    <label class="c-textarea--label">{{$label}}</label>
    <div id="error_{{ $id }}_message" class="c-textarea-invalid-message">
        @icon([
            'icon' => 'error',
            'size' => 'sm'
        ])
        @endicon
        <span class="errorText"></span>
    </div>
</div>