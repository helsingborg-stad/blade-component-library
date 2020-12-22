<?php

namespace BladeComponentLibrary\Component\Accordion__item;

/**
 * Class Accordion
 * @package BladeComponentLibrary\Component\Accordion
 */
class Accordion__item extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        
        extract($this->data);
        $this->data['baseClass'] = 'c-accordion';
        $this->data['id'] = uniqid();

        $this->data['headingType'] = ( is_array($this->heading) ) ? $this->data['baseClass'] . '__heading-is-array' : '';

    }
}
