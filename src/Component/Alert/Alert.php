<?php

namespace BladeComponentLibrary\Component\Alert;

class Alert extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-alert";

        if($hasBackdrop) {
            $this->data['classList'][] = $this->getBaseClass() . "--backdrop";
        }
    }
}