<?php

namespace BladeComponentLibrary\Component\Notice;

class Notice extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-notice"; 

        //Message
        if(isset($message) && $message){
            $this->data['message'] = ucfirst($message);
        }

        //Success
        if($isSuccess) {
            $this->data['classList'][] = $this->getBaseClass() . "--success"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';                 
        }

        //Warning
        if($isWarning) {
            $this->data['icon'] = ($icon) ? $icon : 'check';         
            $this->data['classList'][] = $this->getBaseClass() . "--warning"; 
        }

        //Danger
        if($isDanger) {
            $this->data['classList'][] = $this->getBaseClass() . "--danger"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';  
        }

        //Info
        if($isInfo) {
            $this->data['classList'][] = $this->getBaseClass() . "--info"; 
            $this->data['icon'] = ($icon) ? $icon : 'check';  
        }

        //Slide
        if(isset($slide)){
            $this->data['classList'][] = $this->getBaseClass() . "__slide--from-" . $slide; 
        }
    }
}