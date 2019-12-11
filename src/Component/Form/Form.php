<?php

namespace BladeComponentLibrary\Component\Form;

class Form extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Attributes
        $this->data['attributeList'] = array(
            'method' => 'post',
            'action' => '#',
            'target' => '_self'
        );

    }


}