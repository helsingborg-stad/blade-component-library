<?php

namespace BladeComponentLibrary\Component\CollectionItem;

class CollectionItem extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Key for if slot contains any data
        if(is_object($this->data['subItem'])) {
            $this->data['subItemExists'] = !empty(parent::accessProtected($this->data['subItem'], "html"));
        } 

        if($isCurrent) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-current'; 
        }

        if($subCollection) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-subcollection'; 
        }

    }
}