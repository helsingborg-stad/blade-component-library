<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {
        $this->data['text'] = "hello"; 
    }
}