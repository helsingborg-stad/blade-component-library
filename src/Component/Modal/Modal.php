<?php

namespace BladeComponentLibrary\Component\Modal;

class Modal extends \BladeComponentLibrary\Component\BaseController
{
	public function init() {

		//Extract array for eazy access (fetch only)
		extract($this->data);

		//Class list
		array_unshift($this->data['classList'], 'c-modal');



		//Panel
		if($isPanel) {
			$this->data['classList'][] = $this->getBaseClass() . "--is-panel";
		} else {
			$this->data['classList'][] = $this->getBaseClass() . "--is-modal";
		}

		//Ensure animation is present
		$animation ? $animation : $animation = "slide-down";

		$this->data['parentClass'][] = "c-modal__bg";

		if(isset($animation) && $animation) {
			$this->data['parentClass'][] = "c-modal__bg__animation--" . $animation;
		}

		$this->data['parentClass'] = implode(" ", $this->data['parentClass']);

		//die(var_dump( $this->data['parentClass']));

		//Overlay
		$this->data['classList'][] = $this->getBaseClass() . "--overlay-" . $overlay;
	}

}