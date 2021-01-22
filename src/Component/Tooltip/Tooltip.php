<?php

namespace BladeComponentLibrary\Component\Tooltip;

class Tooltip extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Remove html
        $title = strip_tags($title); 
        
        //Is link? 
        $this->data['isLink'] = $this->data['componentElement'] === 'a';

        //Add classes
        $this->data['classList'][] = $this->getBaseClass() . '__'.$placement; 

        //Adds attributes
        $this->data['attributeList']['js-bind-hover'] = 'tooltip'; 
        $this->data['attributeList']['data-title'] = $title; 
        $this->data['attributeList']['role'] = 'tooltip'; 
        
        if($title) {
            $this->data['attributeList']['aria-label'] = 'Tooltip: ' . $title; 
        }
    }
}
