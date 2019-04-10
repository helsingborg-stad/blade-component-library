<?php

namespace BladeComponentLibrary\Component\Table;

class Table extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}