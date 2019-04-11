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