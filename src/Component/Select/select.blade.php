<div class="c-select__container c-field">
    @if ($label)
    <label for="{{ $id }}" class="u-sr__only c-field__text--label">{{$label}}</label>
    @endif

    <select id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
        @if ($label)
            <option class="c-select__option c-select__option_label " disabled {{ $preselected === '' ? 'selected' : ''}} value="">{!!$label!!}</option>
        @endif

        @foreach ($options as $value => $name)
            <option class="c-select__option" value="{!!$value!!}" {{ $preselected === $value ? 'selected' : ''}}>{!!$name!!}</option>
        @endforeach

        {!! $slot !!}
    </select>

    <div id="error_input_{{ $id }}_message" class="c-field__input-invalid-message">
        @icon([
            'icon' => 'error',
            'size' => 'sm'
        ])
        @endicon
        <span class="errorText"></span>
    </div>

    @icon([
        'classList' => [
            'c-select__icon'
        ],
        'icon' => 'expand_more',
        'size' => 'md',
    ])
    @endicon

</div>