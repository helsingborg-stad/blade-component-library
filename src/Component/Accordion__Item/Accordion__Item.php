<?php

namespace BladeComponentLibrary\Component\Accordion__Item;

/**
 * Class Accordion
 * @package BladeComponentLibrary\Component\Accordion
 */
class Accordion__Item extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        
        extract($this->data);
        $this->data['baseClass'] = 'c-accordion';
        $this->data['id'] = uniqid();
    }
}
