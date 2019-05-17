<!-- form.blade.php -->
<form class="{{$class}}" {!! $attribute !!}>
    {!! $slot !!}

    <h3>Checkboxes</h3>
    <ul class="c-checkbox">
        <li class="c-checkbox__list-item">
            <input type="checkbox" class="c-checkbox__hidden-box" id="check-first" checked/>
            <label for="check-first" class="c-checkbox__label">
                <span class="c-checkbox__label-box"></span>
                <span class="c-checkbox__label-text">I have some candy.</span>
            </label>
        </li>
        <li class="c-checkbox__list-item">
            <input type="checkbox" class="c-checkbox__hidden-box" id="check-second"/>
            <label for="check-second" class="c-checkbox__label">
                <span class="c-checkbox__label-box"></span>
                <span class="c-checkbox__label-text">I Need more candy!</span>
            </label>
        </li>
        <li class="c-checkbox__list-item">
            <input type="checkbox" class="c-checkbox__hidden-box" id="check-third"/>
            <label for="check-third" class="c-checkbox__label">
                <span class="c-checkbox__label-box"></span>
                <span class="c-checkbox__label-text">I'm greedy, Give me more candy!!!!</span>
            </label>
        </li>
    </ul>

    <h3>Radiobuttons</h3>
    <ul class="c-radiobutton">
        <li class="c-radiobutton__list-item">
            <input type="radio" class="c-radiobutton__hidden-box" name="cool-radio" id="radio-first" checked/>
            <label for="radio-first" class="c-radiobutton__label">
                <span class="c-radiobutton__label-box"></span>
                <span class="c-radiobutton__label-text">I like candy!</span>
            </label>
        </li>
        <li class="c-radiobutton__list-item">
            <input type="radio" class="c-radiobutton__hidden-box" name="cool-radio" id="radio-second"/>
            <label for="radio-second" class="c-radiobutton__label">
                <span class="c-radiobutton__label-box"></span>
                <span class="c-radiobutton__label-text">I'm not sure I like candy</span>
            </label>
        </li>
        <li class="c-radiobutton__list-item">
            <input type="radio" class="c-radiobutton__hidden-box" name="cool-radio" id="radio-third"/>
            <label for="radio-third" class="c-radiobutton__label">
                <span class="c-radiobutton__label-box"></span>
                <span class="c-radiobutton__label-text">I hate candy!</span>
            </label>
        </li>
    </ul>

    <h3>Text fields</h3>
    <div class="c-input-text">
        <input class="cp-input-text__field" type="email" placeholder="email">
        <label class="cp-input-text__label">E-mail</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="date" value="<?php echo date('Y-m-d'); ?>">
        <label class="cp-input-text__label">Date</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="week" placeholder="week">
        <label class="cp-input-text__label">Week</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="time" placeholder="time">
        <label class="cp-input-text__label">Time</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="number" placeholder="number">
        <label class="cp-input-text__label">Number</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="password" placeholder="password" required minlength="6"
               maxlength="12">
        <label class="cp-input-text__label">Password</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="search" placeholder="search">
        <label class="cp-input-text__label">Search</label>
    </div>


    <div class="c-input-text">
        <input class="cp-input-text__field" type="tel" placeholder="phone">
        <label class="cp-input-text__label">Phone</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="text" placeholder="text">
        <label class="cp-input-text__label">Text field</label>
    </div>

    <div class="c-input-text">
        <input class="cp-input-text__field" type="url" placeholder="url">
        <label class="cp-input-text__label">Url</label>
    </div>

    <h3>Text area</h3>
    <textarea></textarea>

    <h3>Range Slider</h3>
    <div class="c-input-range">
        <input type="range">
    </div>

    <h3>Color picker</h3>
    <div class="c-input-text">
        <input type="color">
    </div>

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