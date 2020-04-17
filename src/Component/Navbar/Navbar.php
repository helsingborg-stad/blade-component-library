<?php

namespace BladeComponentLibrary\Component\Navbar;

/**
 * Class Card
 * @package BladeComponentLibrary\Component\Navbar
 */
class Navbar extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {

        // Extract array for eazy access (fetch only)
        extract($this->data);

        if($multiDimensial) {
            $this->data['attributeList']['multiDimensional'] = 'true';
        }

        foreach($this->data['expanded_menu'] as $key => $value){
            $this->data['expanded_menu'][$key]['id'] = isset($this->data['expanded_menu'][$key]['id']) ? $this->data['expanded_menu'][$key]['id'] :  null;
        }
    }
}
