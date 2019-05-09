<?php

namespace BladeComponentLibrary\Component\Accordion;

class Accordion extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        array_unshift($this->data['classList'], 'c-accordion');
    }
}
