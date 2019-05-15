<!-- form.blade.php -->
<form class="{{$class}}" {!! $attribute !!}>
    {!! $slot !!}
    <input type="button" class="c-button">
    
    <h3>Checkboxes</h3>
    <ul class="c-checkbox">
        <li class="c-check__list-item">
            <input type="checkbox" class="c-check__hidden-box" id="check-first" checked/>
            <label for="check-first" class="c-check__label">
            <span class="c-check__label-box"></span>
            <span class="c-check__label-text">I have some candy.</span>
            </label>
        </li>
        <li class="c-check__list-item">
            <input type="checkbox" class="c-check__hidden-box" id="check-second" />
            <label for="check-second" class="c-check__label">
            <span class="c-check__label-box"></span>
            <span class="c-check__label-text">I Need more candy!</span>
            </label>
        </li>
        <li class="c-check__list-item">
            <input type="checkbox" class="c-check__hidden-box" id="check-third" />
            <label for="check-third" class="c-check__label">
            <span class="c-check__label-box"></span>
            <span class="c-check__label-text">I'm greedy, Give me more candy!!!!</span>
            </label>
        </li>
    </ul>
    
    <h3>Radiobuttons</h3>
    <ul class="c-radiobutton">
        <li class="c-radiobutton__list-item">
            <input type="radio" class="c-radiobutton__hidden-box" name="cool-radio" id="radio-first" checked/>
            <label for="radio-first" class="c-radiobutton__label">
            <span class="check--label-box"></span>
            <span class="check--label-text">Radio Ibiza</span>
            </label>
        </li>
        <li class="c-radiobutton__list-item">
            <input type="radio" class="hidden-box" name="cool-radio" id="radio-second" />
            <label for="radio-second" class="c-radiobutton__label">
            <span class="c-radiobutton__label-box"></span>
            <span class="c-radiobutton__label-text">Radio Berlin</span>
            </label>
        </li>
        <li class="c-radiobutton__list-item">
            <input type="radio" class="c-radiobutton__hidden-box" name="cool-radio" id="radio-third" />
            <label for="radio-third" class="c-radiobutton__label">
            <span class="c-radiobutton__label-box"></span>
            <span class="c-radiobutton__label-text">Radio London</span>
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