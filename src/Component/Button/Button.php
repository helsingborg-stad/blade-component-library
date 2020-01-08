<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

		$this->data['id'] = uniqid("", true);

		$colorClass = '__' . $type . '--' . $color;
		$sizeClass =  '--' . $size;
	
		$this->addToClassList(true, $colorClass, $sizeClass);

		if($toggle) $this->setToggleAttributes();
	}
	
	// Set data attributes if toggle is set to true on an icon button or an outlined button
    private function setToggleAttributes()
    {
		$toggleId = uniqid('', true);
		
        $this->data['attributeList']['js-toggle-trigger'] = $toggleId;
		$this->data['attributeList']['js-toggle-item'] = $toggleId;
		
		$this->addToClassList(true, '__toggle');
    }

	// First parameter is a boolean that determines if the base class should be prepended
    private function addToClassList($prependBaseClass, ...$classList)
    {
		
		foreach($classList as $class){
			if($prependBaseClass) $class = $this->getBaseClass() . $class;

			$this->data['classList'][] = $class;

			
		}

	
    } 
}
