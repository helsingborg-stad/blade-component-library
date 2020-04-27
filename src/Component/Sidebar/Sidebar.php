<?php

namespace BladeComponentLibrary\Component\Sidebar;

class Sidebar extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if(isset($childItemsUrl)) {
            $this->data['attributeList']['child-items-url'] = $childItemsUrl; 
        }
    }
}
