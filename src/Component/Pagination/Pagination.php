<?php

namespace BladeComponentLibrary\Component\Pagination;

class Pagination extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "pagination"; 

        if(!$current) {
            $this->data['current'] = 1; 
        }

    }
}