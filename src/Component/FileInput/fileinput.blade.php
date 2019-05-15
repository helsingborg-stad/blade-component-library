<!-- fileinput.blade.php -->

<{{$componentElement}} class="{{ $class }}" {!! $attribute !!}>
<input type="file" class="{{ $baseClass }}__input" name="{{ $multiple ? $name . '[]' : $name }}" id="{{ $inputId }}" accept="{{ $accept }}" {{ $multiple ? 'multiple' : '' }} />
    <label for="{{ $inputId }}" class="{{ $baseClass }}__label">
        @if($icon)
            @icon($icon)
            {{ $label }}
            @endicon
        @else
            {{ $beforeLabel }}
                {{ $label }}
            {{ $afterLabel }}
        @endif
    </label>
</{{$componentElement}}>
