<!-- form.blade.php -->
<form id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    {!! $slot !!}

    <h3>File upload</h3>
    @fileinput([
    'classList' => ['unlist'],
    'display' => 'area',
    'multiple' => true,
    'label' => 'Choose files...'
    ])
    @endfileinput


    <h3>Form buttons</h3>
    <input type="reset">
    <input type="submit" value="Submit">
    <input type="button" class="c-button" value="Submit form">
</form>