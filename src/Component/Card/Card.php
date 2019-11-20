<?php

namespace BladeComponentLibrary\Component\Card;

class Card extends \BladeComponentLibrary\Component\BaseController
{
	public function init()
	{
		//Extract array for eazy access (fetch only)
		extract($this->data);

		//Mark as link
		if ($href) {
			$this->data['classList'][] = $this->getBaseClass() . "--link";
		}

		//Data
		$this->data['showBody'] = (!empty(array_filter([$title, $content, $byline]))) ? true : false;
		$this->data['showFooter'] = (!empty(array_filter([$buttons])) || !empty(array_filter([$icons]))) ? true : false;

		$this->data['avatarImage'] = (isset($avatar["image"]) && !empty($avatar['image'])) ? $avatar['image'] : null;
		$this->data['avatarName'] = (isset($avatar["name"]) && !empty($avatar['name'])) ? $avatar['name'] : null;
		
		$this->data['icons'] = (!empty(array_filter($icons))) ? $icons : null;
		#$this->data['icons'] = (!empty(array_filter($icons['color']))) ? $icons['color'] : null;


		//Has ripple
		if ($hasRipple) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

		// Add base class
		array_unshift($this->data['classList'], 'c-card');
	}
}
