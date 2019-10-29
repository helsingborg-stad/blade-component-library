<?php

namespace BladeComponentLibrary\Component\Notice;

class Notice extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-notice"; 

        //Success
        if($isSuccess) {
            $this->data['classList'][] = $this->getBaseClass() . "--success"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';          
            $this->data['message'] = (isset($message) && $message) ? $message : 'This is the content of this masterpiece called notice.';          
        }

        //Warning
        if($isWarning) {
            $this->data['icon'] = ($icon) ? $icon : 'check';         
            $this->data['classList'][] = $this->getBaseClass() . "--warning"; 
            $this->data['message'] = (isset($message) && $message) ? $message : 'This is the content of this masterpiece called notice.';   
        }

        //Danger
        if($isDanger) {
            $this->data['classList'][] = $this->getBaseClass() . "--danger"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';  
            $this->data['message'] = (isset($message) && $message) ? $message : 'This is the content of this masterpiece called notice.';          
        }

        //Info
        if($isInfo) {
            $this->data['classList'][] = $this->getBaseClass() . "--info"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';  
            $this->data['message'] = (isset($message) && $message) ? $message : 'This is the content of this masterpiece called notice.';          
        }
    }
}