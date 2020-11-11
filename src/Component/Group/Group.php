<?php

namespace BladeComponentLibrary\Component\Group;

/**
 * Class Group
 * @package BladeComponentLibrary\Component\Group
 */
class Group extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if ($direction == "vertical") {
            $this->data['classList'][] = $this->getBaseClass() . "--vertical";
        } else {
            $this->data['classList'][] = $this->getBaseClass() . "--horizontal";
        }
    }
}
