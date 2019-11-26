<?php

namespace BladeComponentLibrary\Component\SplitButton;

class SplitButton extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-splitbutton');

    }
}
