<!-- fileinput.blade.php -->

<{{$componentElement}} class="{{ $class }}">
<input type="file" class="{{ $baseClass }}__input" name="{{ $multiple ? $name . '[]' : $name }}" id="{{ $inputId }}" accept="{{ $accept }}" {{ $multiple ? 'multiple' : '' }} />
    <label for="{{ $inputId }}" class="{{ $baseClass }}__label">
        {{ $beforeLabel }}
            {{ $label }}
        {{ $afterLabel }}
    </label>
</{{$componentElement}}>
