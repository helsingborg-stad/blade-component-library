<!-- form.blade.php -->
<form class="{{$class}}" method="" action="" target="">
    {!! $slot !!}
    <input type="button" class="c-button">
    
    <div class="c-checkbox">
    <label for="test-check"></label> <input type="checkbox" name="test-check">
    </div>

    <input type="radio"  name="test-radio"><label for="test-radio"></label>
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    @fileinput([
            'classList' => ['unlist'],
            'display' => 'area',
            'multiple' => true,
            'label' => 'Choose files...'
        ])
    @endfileinput
    <input type="hidden">
    <input type="image">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="submit">
    <input type="tel">
    <input type="text">
    <input type="time">
    <input type="url">
    <input type="week">

    <textarea></textarea>

    <input type="reset">
    <input type="submit" value="Submit">
</form>