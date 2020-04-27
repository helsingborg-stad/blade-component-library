<?php

namespace BladeComponentLibrary\Component\Divider;

/**
 * Class Dropdown
 * @package BladeComponentLibrary\Component\Dropdown
 */
class Divider extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}
