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

		//Show body and Footer depending on data
		$this->data['showBody'] = (!empty(array_filter([$title, $content, $byline]))) ? true : false;
		$this->data['showFooter'] = (!empty(array_filter([$buttons])) || !empty(array_filter([$icons]))) ? true : false;

		// Image
		$image = (isset($image) && !empty($image)) ? $image : null;

		// Byline
		$byline["text"] = (isset($byline["text"]) && !empty($byline["text"])) ? $byline["text"] : null;

		//Avatar
		$avatar["image"] = (isset($avatar["image"]) && !empty($avatar["image"])) ? $avatar["image"] : null;
		$avatar["name"] = (isset($avatar["name"]) && !empty($avatar["name"])) ? $avatar["name"] : null;

		//Buttons
		$button["href"] = (isset($button["href"]) && !empty($button["href"])) ? $button["href"] : null;
		$button["text"] = (isset($button["text"]) && !empty($button["text"])) ? $button["text"] : null;

		// Icons
		$icon["name"] = (isset($icon["name"]) && !empty($icon["name"])) ? $icon["name"] : null;
		$icon["color"] = (isset($icon["color"]) && !empty($icon["size"])) ? $icon["color"] : null;
		$icon["size"] = (isset($icon["size"]) && !empty($icon["size"])) ? $icon["size"] : null;
		$icon["trigger"] = (isset($icon["trigger"]) && !empty($icon["trigger"])) ? $icon["trigger"] : null;
		$icon["classList"] = (isset($icon["classList"]) && !empty($icon["classList"])) ? $icon["classList"] : null;

		//Has ripple
		if ($hasRipple) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

		// Add base class
		array_unshift($this->data['classList'], 'c-card');
	}
}
