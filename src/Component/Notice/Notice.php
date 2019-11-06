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
        if(isset($message) && is_array($message) && !empty($message)){
            $message['text'] = ucfirst($message['text']);
            $this->data['message'] = $message;
        }

        if(isset($message['size'])){
            $this->data['messageSize'] = $this->getBaseClass() . '__message--' . $message['size'];                
        }

        //Set icon size (depending on avatar size)
        if(isset($icon) && is_array($icon) && !empty($icon) && isset($icon['name'])) {
            $this->data['icon'] = $icon;
        }

        //Success
        if($isSuccess) {
            $this->data['classList'][] = $this->getBaseClass() . "--success";                
        }

        //Warning
        if($isWarning) {      
            $this->data['classList'][] = $this->getBaseClass() . "--warning"; 
        }

        //Danger
        if($isDanger) {
            $this->data['classList'][] = $this->getBaseClass() . "--danger"; 
        }

        //Info
        if($isInfo) {
            $this->data['classList'][] = $this->getBaseClass() . "--info"; 
        }
    }
}