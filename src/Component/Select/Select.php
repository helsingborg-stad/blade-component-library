<?php

namespace BladeComponentLibrary\Component\Select;

class Select extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid();

        if ($errorMessage) {
            $this->data['data-invalid-message'] = $errorMessage;
        }

        if ($required) {
            $this->data['attributeList']['required'] = 'required';
            $this->data['attributeList']['data-required'] = '1';
        }
    }
}