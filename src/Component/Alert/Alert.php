<?php

namespace BladeComponentLibrary\Component\Alert;

class Alert extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "alert";

        if($hasBackdrop) {
            $this->data['classList'][] = "backdrop";
        }
    }
}