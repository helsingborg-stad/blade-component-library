<?php

namespace BladeComponentLibrary\Component\Field;

class Field extends \BladeComponentLibrary\Component\Form\Form
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->compParams = [
            'textarea' => $textarea ?? false,
            'label' => $label ?? '',
            'type' => $type ?? 'text',
            'required' => $required ?? false,
            'invalidMessage' => $invalidMessage ?? '',
            'value' => $value ?? ''
        ];

        $this->setData();
    }

    public function setData(){
        $this->data['textarea'] = $this->compParams['textarea'];
        $this->data['label'] = $this->compParams['label'];
        $this->data['type'] = $this->compParams['type'];
        $this->data['required'] = $this->compParams['required'];
        $this->data['invalidMessage'] = $this->compParams['invalidMessage'];
        $this->data['value'] = $this->compParams['value'];
        //var_dump($this->data);
        return $this->data;
    }

}