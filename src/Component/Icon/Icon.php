<?php

namespace BladeComponentLibrary\Component\Icon;

class Icon extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for easy access (fetch only)
        extract($this->data);

        //Add base class
        array_unshift($this->data['classList'], "c-icon");

        //Append space before label
        if($label = trim($label)) {
            $this->data['label'] = " " . $label;
        }

        // Set color based on provided name
        if(isset($color)) {
            $this->data['classList'][] = $this->getBaseClass() . "--color-" .  strtolower($color);
        }

        //Available sizes
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
            $this->data['classList'][] = $this->getBaseClass() . "--size-".$size;
        } else {
            $this->data['classList'][] = $this->getBaseClass() . "--size-inherit";
        }
    }
}
