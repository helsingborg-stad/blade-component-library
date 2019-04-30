<?php

namespace BladeComponentLibrary\Component\Notice;

class Notice extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "notice"; 

        //Success
        if($isSuccess) {
            $this->data['classList'][] = "is-success"; 
        }

        //Warning
        if($isWarning) {
            $this->data['classList'][] = "is-warning"; 
        }

        //Danger
        if($isDanger) {
            $this->data['classList'][] = "is-danger"; 
        }

        //Info
        if($isInfo) {
            $this->data['classList'][] = "is-info"; 
        }
    }
}