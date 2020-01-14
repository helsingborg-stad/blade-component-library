<?php

namespace BladeComponentLibrary\Component\Slider;

class Slider extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid("", true);
        $this->data['attributeList']['data-step'] = 0;
    }
}
