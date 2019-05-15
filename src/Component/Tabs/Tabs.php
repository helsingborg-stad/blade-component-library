<?php

namespace BladeComponentLibrary\Component\Tabs;

class Tabs extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Generate unique ID
        $this->data['id'] = uniqid();

        // Add base class
        array_unshift($this->data['classList'], 'c-tabs');
    }
}
