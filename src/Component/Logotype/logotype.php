<?php

namespace BladeComponentLibrary\Component\Logotype;

class Logotype extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Add placeholder class
        if(!$src) {
            $this->data['classList'][] = "is-placeholder";
        }

        //Inherit the alt text
        if(!$alt && $caption) {
            $this->data['alt'] = $this->data['caption'];
        }

        // Add base class
        array_unshift($this->data['classList'], 'logotype');
    }
}
