<?php

namespace BladeComponentLibrary\Component\Field;

class Field extends \BladeComponentLibrary\Component\Form\Form
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}