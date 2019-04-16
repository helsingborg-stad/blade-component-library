<?php

namespace BladeComponentLibrary\Component\Avatar;

class Avatar extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "avatar";

        //Get initials
        if($name) {
            $this->data['initials'] = $this->createInitials($name); 
        } else {
            $this->data['initials'] = "";
        }

        //Create label
        if($name) {
            $this->data['label'] = $name; 
        } else {
            $this->data['label'] = "Unknown user"; 
        }

        //Reset 
        $this->renderMostImportant(); //Decides how to switch beteen data inputs
    }

    private function renderMostImportant() {

        //Reset icon, initials if image set
        if($this->data['image']) {
            $this->data['icon'] = "";
            $this->data['initials'] = ""; 
        }

        //Reset image, initials if icon set
        if($this->data['icon']) {
            $this->data['image'] = "";
            $this->data['initials'] = ""; 
        }

        //Reset icon, image if initals set
        if($this->data['initials']) {
            $this->data['image'] = "";
            $this->data['icon'] = ""; 
        }

    }

    private function createInitials($name) {

        $nameParts = preg_split("/( |-|_)/", $name);

        if(is_array($nameParts) && !empty($nameParts)) {
            $initials = array(); 
            foreach($nameParts as $part) {
                $initials[] = substr($part, 0, 1);
            }
            return strtoupper(implode("", $initials)); 
        }

        return ""; 
    }
}