<?php

namespace BladeComponentLibrary\Component\Field;

class Field extends \BladeComponentLibrary\Component\Form\Form
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->compParams = [
            'label' => $label ?? '',
            'type' => $type ?? 'text',
            'required' => $required ?? false,
            'invalidMessage' => $invalidMessage ?? '',
            'value' => $value ?? ''
        ];

        //Set type
        $this->data['classList'][] = $this->getBaseClass() . "__" . $type; 

        //Handle icon
        $this->data['icon'] = $this->getIcon($icon, $size); 
        if($this->data['icon']) {
            $this->data['classList'][] = $this->getBaseClass() . "--icon"; 
        }

        //Handle size
        if(!in_array($size, ['sm', 'md', 'lg'])) {
            $size = "md"; 
        }
        $this->data['classList'][] = $this->getBaseClass() . "--" . $size; 
        
        //Handle radius
        if($this->data['radius']) {
            $this->data['classList'][] = $this->getBaseClass() . "--radius-" . $this->data['radius']; 
        }

        //Set data
        $this->setData();

        //Hsandle datepicker exceptions
        if ($type == 'datepicker') {

            $this->compParams = [
                'type' => 'text'
            ];
            $this->data['type'] = 'text';

            $this->data['attributeList']['js-datepicker'] = true;
    
            $this->setMinAndMaxDate(isset($datepicker['minDate']) ? $datepicker['minDate'] : '', isset($datepicker['maxDate']) ? $datepicker['maxDate'] : '');

            $this->setOptionals(isset($datepicker['title']) ? $datepicker['title'] : 'Select a date');

            $this->buildUI([
                'showResetButton' => isset($datepicker['showResetButton']) ? $datepicker['showResetButton'] : false,
                'showDaysOutOfMonth' => isset($datepicker['showDaysOutOfMonth']) ? $datepicker['showDaysOutOfMonth'] : true,
                'showClearButton' => isset($datepicker['showClearButton']) ? $datepicker['showClearButton'] : true,
                'hideOnBlur' => isset($datepicker['hideOnBlur']) ? $datepicker['hideOnBlur'] : true,
                'hideOnSelect' => isset($datepicker['hideOnSelect']) ? $datepicker['hideOnSelect'] : true,
            ]);
        }
        
    }

    /**
     * Get a icon, set default vars. 
     *
     * @param array|bool $icon
     * @return array|bool
     */
    public function getIcon($icon, $size) {
        
        if(is_array($icon) && !empty($icon)) {
            return array_merge([
                'size' => $this->getIconSize($size),
                'icon' => 'search'
            ], $icon); 
        }

        return false; 
    }

    /**
     * Select appropriate icon size based on field size
     *
     * @param string $fieldSize
     * @return string
     */
    public function getIconSize($fieldSize) {
        switch ($fieldSize) {
            case 'sm':
                return 'sm'; 
                break;
            default:
                return 'md';
            break;  
        }
    }

    public function setData(){
        $this->data['label'] = $this->compParams['label'];
        $this->data['type'] = $this->compParams['type'];
        $this->data['required'] = $this->compParams['required'];
        $this->data['invalidMessage'] = $this->compParams['invalidMessage'];
        $this->data['value'] = $this->compParams['value'];
    }

    public function setMinAndMaxDate($minDate, $maxDate) {
        $minDate ?
            $this->data['attributeList']['c-datepicker-min'] = date("n/j/Y", strtotime($minDate))
            : '';
        $maxDate ?
            $this->data['attributeList']['c-datepicker-max'] = date("n/j/Y", strtotime($maxDate))
            : '';
    }

    public function setOptionals($title) {
        $this->data['attributeList']['c-datepicker-title'] = $title;
    }

    public function setRequired($required) {
        $this->data['attributeList']['c-datepicker-required'] = $required;
    }

    public function buildUI($UI) {
        $this->data['attributeList']['c-datepicker-showResetButton'] = $UI['showResetButton'];
        $this->data['attributeList']['c-datepicker-showDaysOutOfMonth'] = $UI['showDaysOutOfMonth'];
        $this->data['attributeList']['c-datepicker-showClearButton'] = $UI['showClearButton'];
        $this->data['attributeList']['c-datepicker-hideOnBlur'] = $UI['hideOnBlur'];
        $this->data['attributeList']['c-datepicker-hideOnSelect'] = $UI['hideOnSelect'];
    }

}