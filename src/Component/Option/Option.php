<?php

namespace BladeComponentLibrary\Component\Option;

/**
 * Class Option
 * @package BladeComponentLibrary\Component\Option
 */
class Option extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid();

        $this->compParams = [
            'label' => $label ?? '',
            'required' => $required ?? false,
            'invalidMessage' => $invalidMessage ?? '',
            'value' => $value ?? '',
            'checked' =>  $checked ?? false
        ];

        $this->setData();
    }

    /**
     * Mapping data
     */
    public function setData()
    {
        $this->data['label'] = $this->compParams['label'];
        $this->data['invalidMessage'] = $this->compParams['invalidMessage'];
        $this->data['value'] = $this->compParams['value'];
        $this->data['checked'] = $this->compParams['checked'];
        
        if ($this->compParams['required']) {
             $this->data['attributeList']['required'] = true;
        }
       
    }


}
