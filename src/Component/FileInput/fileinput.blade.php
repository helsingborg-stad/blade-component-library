<!-- fileinput.blade.php -->

<{{$componentElement}} class="{{ $class }}">
<input type="file" class="{{ $baseClass }}__input" name="{{ $multiple ? $name . '[]' : $name }}" id="{{ $inputId }}" accept="{{ $accept }}" {{ $multiple ? 'multiple' : '' }} data-multiple-caption="{count} files selected"/>
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
