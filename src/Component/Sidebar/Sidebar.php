<?php

namespace BladeComponentLibrary\Component\Sidebar;

class Sidebar extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);
        //die(print_r($this->data));
        if($this->data['childItems']){
            $this->data['attributeList']['child-items-url'] = $childItems;
        }
    }
}
