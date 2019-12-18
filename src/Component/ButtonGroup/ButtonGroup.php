<?php

namespace BladeComponentLibrary\Component\ButtonGroup;

/**
 * Class ButtonGroup
 * @package BladeComponentLibrary\Component\ButtonGroup
 */
class ButtonGroup extends \BladeComponentLibrary\Component\BaseController
{

    public $groupId;

    public function init() {
      
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if(isset($borderColor)){
            $this->data['classList'][] = $this->getBaseClass() . '__border--' . $borderColor; 
        }

        if(isset($backgroundColor)){
            $this->data['classList'][] = $this->getBaseClass() . '__background--' . $backgroundColor; 
        }

        if(isset($buttons) && ($exclusiveToggle || $toggle))
        {  
            $this->data['buttons'] = $this->setToggleAttributes($buttons, $exclusiveToggle);   
        }
       
    }

    function setToggleAttributes($buttons, $exclusiveToggle)
    {
        $groupId = uniqid('', true); 
        foreach($buttons as $key => $button)
        {
           
            $triggerId = uniqid('',true);
            $buttons[$key]['toggle'] = true;
            $buttons[$key]['attributeList']['js-toggle-trigger'] = $triggerId;
            $buttons[$key]['attributeList']['js-toggle-item'] = $triggerId; 

            if($exclusiveToggle)
            {
                $buttons[$key]['attributeList']['js-toggle-group'] = $groupId; 
            }   
        }
    
        return $buttons;    
    }

}