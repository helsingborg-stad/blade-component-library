<?php

namespace BladeComponentLibrary\Component\CollectionItem;

class CollectionItem extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}