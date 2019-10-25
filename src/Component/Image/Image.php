<?php

namespace BladeComponentLibrary\Component\Image;

class Image extends \BladeComponentLibrary\Component\BaseController
{

	public function init()
	{

		//Extract array for eazy access (fetch only)
		extract($this->data);
		array_unshift($this->data['classList'], "c-image");

		//Add placeholder class
		if (!$src) {
			$this->data['classList'][] = $this->getBaseClass() . "--is-placeholder";
		}

		//Make full width
		if ($fullWidth) {
			$this->data['classList'][] = $this->getBaseClass() . "--full-width";
		}

		//Inherit the alt text
		if (!$alt && $caption) {
			$this->data['alt'] = $this->data['caption'];
		}

		//Rounded corners
		if ($rounded) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded ";
		}

		//Rounded corners top
		if ($roundedTopLeft) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-top-left ";
		}

		//Rounded corners top
		if ($roundedTopRight) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-top-right ";
		}

		//Rounded corners bottom
		if ($roundedBottomLeft) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-bottom-left ";
		}

		//Rounded corners bottom
		if ($roundedBottomRight) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-bottom-right ";
		}

		//Rounded corners bottom
		if ($roundedRadius) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-".$roundedRadius;
		}

		//Rounded corners circle
		if ($roundedCircle) {
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-circle ";
			$this->data['classList'][] = $this->getBaseClass() . "--rounded-circle ";
		}

	}
}