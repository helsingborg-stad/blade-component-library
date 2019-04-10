<?php

namespace BladeComponentLibrary\Component\Notice;

class Notice extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "notice"; 

        //Primary btn
        if($isSuccess) {
            $this->data['classList'][] = "success"; 
        }

        //Disabled btn
        if($isWarning) {
            $this->data['classList'][] = "warning"; 
        }

        //Disabled btn
        if($isDanger) {
            $this->data['classList'][] = "danger"; 
        }

        //Disabled btn
        if($isInfo) {
            $this->data['classList'][] = "info"; 
        }
    }
}