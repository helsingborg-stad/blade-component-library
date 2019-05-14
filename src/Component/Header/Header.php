<?php

namespace BladeComponentLibrary\Component\Header;

class Header extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
        
        $this->data['classList'][] = "c-header"; 

        //Location logic
        $this->data['levelContent'] = array(
            1 => [],
            2 => ['logotype', 'menu'],
            3 => []
        );
    }
}