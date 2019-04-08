<?php

namespace BladeComponentLibrary\Component\Card;

class Card extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        $this->data['foo'] = "bar"; 
    }
}