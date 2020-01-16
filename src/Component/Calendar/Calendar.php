<?php

namespace BladeComponentLibrary\Component\Calendar;

class Calendar extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);
		$attributes = [
			'get' => $get,
			'post' => $post,
			'weekStart' => $weekStart,
			'size' => $size,
			'color' => $color
		];

		$this->addToAttributeList($attributes);
		$this->setColor($color);
		$this->data['id'] = uniqid("", true);
	}

	private function addToAttributeList($attributeList)
    {
		foreach($attributeList as $key => $value){
			$this->data['attributeList'][$key] = $value;	
		}
	} 

	private function setColor($color){
		$this->data['classList'][] = $this->getBaseClass() . '--' . $color;
	}
}
