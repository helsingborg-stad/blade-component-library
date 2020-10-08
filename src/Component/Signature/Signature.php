<?php

namespace BladeComponentLibrary\Component\Signature;

class Signature extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Component element
        if($link) {
            $this->data['componentElement'] = "a"; 
            $this->data['attributeList'] = ['href' => $link]; 
		} else {
			$this->data['componentElement'] = "div"; 
        }
    }
}
