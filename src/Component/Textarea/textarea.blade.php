<!-- textarea.blade.php -->
<div class="{{$class}}" role="textarea">
    <textarea {!! $attribute !!}
            aria-multiline="true"
              placeholder="{{$label}}"
              aria-placebolder="{{$label}}"
              aria-label="{{$label}}"
              id="{{ $id }}"
              @if($required)
                  required
                  data-required="1"
                  aria-required="true"
              @endif
    >{{$value}}</textarea>
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