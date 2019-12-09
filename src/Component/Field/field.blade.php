<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}} c-field__{{$type}}">
    @if(!$textarea)
        @if ($type === 'radio' || $type === 'checkbox')
            <input class="c-field__input" {!! $attribute !!} type="{{$type}}" class="c-field__{{$type}}--hidden-box" id="trigger_{{ $id }}" />
            <label for="trigger_{{ $id }}" class="c-field__{{$type}}--label">
                <span class="c-field__{{$type}}--label-box"></span>
                 <span class="c-field__{{$type}}--label-text">{{$label}}</span>
            </label>
        @else
            <input id="control_{{ $id }}" class="c-field__input"
                   value="" {!! $attribute !!} @if($required) {{$required}} @endif
                   data-invalid="{{$invalidMessage}}"/>
            <label class="c-field__text--label">{{$label}}</label>
            <div for="control_{{ $id }}" class="c-field__input-invalid-message"></div>
        @endif
    @else
        <textarea {!! $attribute !!} ></textarea>
        <label class="c-field__textare--label">{{$label}}</label>
        <div for="control_{{ $id }}" class="c-field__textarea-invalid-message"></div>
    @endif
</div>
