<!-- form.blade.php -->
<form class="{{$class}}" {!! $attribute !!}>
    {!! $slot !!}
    <input type="button" class="c-button">
    
    <ul class="c-checkbox">
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="check-first" checked/>
            <label for="check-first" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">I have a candy.</span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="check-second" />
            <label for="check-second" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">I Need more candy!</span>
            </label>
        </li>
        <li class="list-item">
            <input type="checkbox" class="hidden-box" id="check-third" />
            <label for="check-third" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">I'm greedy, Give me more candy!!!!</span>
            </label>
        </li>
    </ul>
    

    <ul class="c-radiobutton">
        <li class="list-item">
            <input type="radio" class="hidden-box" name="cool-radio" id="radio-first" checked/>
            <label for="radio-first" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Radio Ibiza</span>
            </label>
        </li>
        <li class="list-item">
            <input type="radio" class="hidden-box" name="cool-radio" id="radio-second" />
            <label for="radio-second" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Radio Berlin</span>
            </label>
        </li>
        <li class="list-item">
            <input type="radio" class="hidden-box" name="cool-radio" id="radio-third" />
            <label for="radio-third" class="check--label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Radio London</span>
            </label>
        </li>
    </ul>
    

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