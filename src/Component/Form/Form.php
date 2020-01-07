<?php

namespace BladeComponentLibrary\Component\Form;

/**
 * Class Form
 * @package BladeComponentLibrary\Component\Form
 */
class Form extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        extract($this->data);
        $this->setData();
    }

    /**
     * Set data
     */
    public function setData(){
        $this->data = [
            'method' 	=> $method ?? 'POST',
            'action' 	=> $action ?? '#'
        ];
    }


}