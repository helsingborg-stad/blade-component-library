<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-btn');

        $this->data['labelMod'] = "";
        
        if (isset($isIconButton) && $isIconButton) {
            $hasRipple = false;
            $isPlain = true; 
            $this->data['classList'][] = $this->getBaseClass() . "__icon--" . $size;
        } elseif (isset($isOutlined) && $isOutlined) {
            $this->data['classList'][] = $this->getBaseClass() . "__outlined--" . $color; 
        }

        if (isset($background) && $background) {
            $this->data['classList'][] = $this->getBaseClass() . "--" . $background; 
        }

        if (isset($icon) && isset($reverseIcon) && $reverseIcon){
                $this->data['labelMod'] = '--reverse';    
        }
    
        if (!$href) {
            $this->data['href'] = "#";
        }


        if (isset($floating) && $floating['animate'] && $floating['hover']) {
            $this->data['classList'][] = $this->getBaseClass() . "--animated-float-on-hover";
        }elseif (isset($floating) && $floating['hover']) {
            $this->data['classList'][] = $this->getBaseClass() . "--float-on-hover";
        }elseif (isset($floating) && $floating){

            $this->data['classList'][] = $this->getBaseClass() . "--floating";
        }

        if (isset($size) && !isset($isIconButton)) {
            $this->data['classList'][] = $this->getBaseClass() . "--" . $size;
        }

        if (isset($hasRipple) && $hasRipple) {
            $this->data['classList'][] = "ripple"; 
            $this->data['classList'][] = "ripple--before"; 
        }
        
        if (isset($icon)) {
            $this->data['icon'] = $icon; 
        }

        if (isset($floatOnHover) && $floatOnHover) {
            $this->data['classList'][] = $this->getBaseClass() . "--float-on-hover";
        }
    }
}
