<?php

namespace BladeComponentLibrary\Component\Fab;

class Fab extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for easy access (fetch only)
        extract($this->data);

        $tempPosition = isset($position) && $position ? $position : "bottom-right";
        $tempSpacing = isset($spacing) && $spacing ? $spacing : "md";

        $this->data['classList'][] = $this->getBaseClass() . "__" . $tempPosition . "--" . $tempSpacing;

    }
}
