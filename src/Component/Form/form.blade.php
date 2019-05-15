<!-- form.blade.php -->
<form class="{{$class}}" {!! $attribute !!}>
    {!! $slot !!}
    <input type="button" class="c-button">
    
    <ul class="c-checkbox">
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="first" checked/>
            <label for="first" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">First Checkbox</span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="second" />
            <label for="second" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Second Checkbox</span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="third" />
            <label for="third" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Third Checkbox</span>
            </label>
        </li>
    </ul>

    <div class="c-radio">
        <input type="radio" name="radio-showcase">
        <label for="radio-showcase"></label> 
    </div>


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