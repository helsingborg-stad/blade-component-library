<?php

namespace BladeComponentLibrary\Controller;

class Card extends BaseController 
{
    public function init() {
        $this->data['foo'] = "bar"; 
    }
}