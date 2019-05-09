<?php

namespace BladeComponentLibrary\Component\Menu;

class Menu extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "c-menu"; 
    }

    public function multiKeyExists(array $arr, $key) {

        // is in base array?
        if (array_key_exists($key, $arr)) {
            return true;
        }
    
        // check arrays contained in this array
        foreach ($arr as $element) {
            if (is_array($element)) {
                if (multiKeyExists($element, $key)) {
                    return true;
                }
            }
    
        }
        return false;
    }
}