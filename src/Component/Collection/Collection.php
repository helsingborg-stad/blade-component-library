<?php

namespace BladeComponentLibrary\Component\Collection;

class Collection extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}