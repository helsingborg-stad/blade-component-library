<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}} c-field__{{$type}}">
    @if(!$textarea)
        @if ($type === 'radio' || $type === 'checkbox')
            <input {!! $attribute !!} type="{{$type}}" class="c-field__{{$type}}--hidden-box" id="trigger_{{ $id }}" />
            <label for="trigger_{{ $id }}" class="c-field__{{$type}}--label">
                <span class="c-field__{{$type}}--label-box"></span>
                 <span class="c-field__{{$type}}--label-text">{{$label}}</span>
            </label>
        @else
            <input {!! $attribute !!} />
            <label class="c-field__text--label">{{$label}}</label>
        @endif
    @else
        <textarea {!! $attribute !!} ></textarea>
    @endif


</div>
