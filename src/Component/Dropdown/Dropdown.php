<?php

namespace BladeComponentLibrary\Component\Dropdown;

class Dropdown extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-dropdown');

        if(isset($direction)){
            $this->data['direction'] = $direction;
            $this->data['classList'][] = $this->getBaseClass() . "-btn--" . $direction;
        }

        if(isset($popup)){
            $this->data['classList'][] = $this->getBaseClass() . "--on-" . $popup; 
        }
    }
}
