<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController
{

	public function init()
	{
		//Extract array for eazy access (fetch only)
		extract($this->data);

		$this->data['labelMod'] = "";

		$this->data['id'] = uniqid("", true);

		if (isset($isIconButton) && $isIconButton) {
			$this->data['classList'][] = $this->getBaseClass() . "__icon";
			if (isset($background) && $background) {
				$this->data['classList'][] = $this->getBaseClass() . '__icon-bg--' . $color;
			} 
			
			if(isset($hover['background'])){
				$this->data['classList'][] = $this->getBaseClass() . '__icon-hover-background--' . $hover['background'];
			}

			if(isset($hover['color'])){
				$this->data['classList'][] = $this->getBaseClass() . '__icon-hover-color--' . $hover['color'];
			}

		} elseif (isset($isOutlined) && $isOutlined) {
			$this->data['classList'][] = $this->getBaseClass() . "__outlined--" . $color;
			if (isset($toggle) && $toggle) {
				$toggleId = uniqid('', true);
				$this->data['attributeList']['js-toggle-trigger'] = $toggleId;
				$this->data['attributeList']['js-toggle-item'] = $toggleId;
			}
		} elseif(isset($isTextButton) && $isTextButton) {
			$this->data['classList'][] = $this->getBaseClass() . '__text';
			$this->data['classList'][] = $this->getBaseClass() . '__text--' . $color;
		}

		if (isset($background) && $background && !$isOutlined) {
			$this->data['classList'][] = $this->getBaseClass() . "--" . $background;
		}

		if (isset($icon) && isset($reverseIcon) && $reverseIcon) {
			$this->data['labelMod'] = '--reverse';
		}

		if (!$href) {
			$this->data['href'] = "#";
		}

		if (isset($floating) && $floating['animate'] && $floating['hover']) {
			$this->data['classList'][] = $this->getBaseClass() . "--animated-float-on-hover";
		} elseif (isset($floating) && $floating['hover']) {
			$this->data['classList'][] = $this->getBaseClass() . "--float-on-hover";
		} elseif (isset($floating) && is_array($floating)) {
			$this->data['classList'][] = $this->getBaseClass() . "--floating";
		}

		if (isset($size) && !isset($isIconButton)) {
			$this->data['classList'][] = $this->getBaseClass() . "--" . $size;
		}

		if (isset($hasRipple) && $hasRipple) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

		if (isset($icon)) {
			$this->data['icon'] = $icon;
		}

		if (isset($floatOnHover) && $floatOnHover) {
			$this->data['classList'][] = $this->getBaseClass() . "--float-on-hover";
		}
	}			
}

