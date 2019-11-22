<?php

namespace BladeComponentLibrary\Component\Tags;

class Tags extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}
