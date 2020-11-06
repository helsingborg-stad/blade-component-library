<?php

namespace BladeComponentLibrary\Component\Group;

/**
 * Class Group
 * @package BladeComponentLibrary\Component\Group
 */
class Group extends \BladeComponentLibrary\Component\BaseController
{
	public function init()
	{
		//Extract array for eazy access (fetch only)
		extract($this->data);

		if($direction == "vertical") {
			$this->data["direction"] = "--vertical"; 
		} else {
			$this->data["direction"] = "--horizontal"; 
		}

	}

}