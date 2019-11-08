<?php

namespace BladeComponentLibrary\Component\Dropdown;

class Dropdown extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-dropdown');
    }
}
