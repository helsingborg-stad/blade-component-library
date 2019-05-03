<?php

namespace BladeComponentLibrary\Component\Icon;

class Icon extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-icon"; 
        $this->data['classList'][] = "pricon"; //Backwards compability

        //Append space before label
        if($label = trim($label)) {
            $this->data['label'] = " " . $label; 
        }

        //Avabile sizes
        $sizes = [
            'xs' => '16',
            'sm' => '24',
            'md' => '32',
            'lg' => '48',
            'xl' => '64',
            'xxl' => '80',
        ]; 

        //Size class
        if(isset($sizes[$size])) {
            $this->data['classList'][] = $this->getBaseClass() . "--size-".$sizes[$size]; 
            $this->data['classList'][] = $this->getBaseClass() . "--size-".$size; 
        } else {
            $this->data['classList'][] = $this->getBaseClass() . "--size-32"; 
            $this->data['classList'][] = $this->getBaseClass() . "--size-md";
        }
    }
}