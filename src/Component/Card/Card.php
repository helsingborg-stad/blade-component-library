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

		//Card Body & Card Footer
		$this->data['showBody'] = (!empty(array_filter([$title, $content, $byline]))) ? true : false;
		$this->data['showFooter'] = (!empty(array_filter([$buttons])) || !empty(array_filter([$icons]))) ? true : false;

		// Avatar
		$this->data['avatarImage'] = (isset($avatar["image"]) && !empty($avatar['image'])) ? $avatar['image'] : null;
		$this->data['avatarName'] = (isset($avatar["name"]) && !empty($avatar['name'])) ? $avatar['name'] : null;

		// Title and Byline
		$this->data['byline']["position"] = (isset($byline["position"]) && !empty($byline['position'])) ? $byline['position'] : null;
		$this->data['byline']["text"] = (isset($byline["text"]) && !empty($byline['position'])) ? $byline['text'] : null;
		$this->data['title']["position"] = (isset($title["position"]) && !empty($title['position'])) ? $title['position'] : null;
		$this->data['title']["text"] = (isset($title["text"]) && !empty($title['position'])) ? $title['text'] : null;

		// Check if Button icon parameter array has keys
		$this->data['icons'] = (!empty(array_filter($icons))) ? $icons : false;
		if ($this->data['icons']) {
			foreach($this->data['icons'] as $key => $iconParams){
				$this->data['icons'][$key]['color']  = array_key_exists('color', $iconParams) ? $this->data['icons'][$key]['color']  : '';
				$this->data['icons'][$key]['size']  = array_key_exists('size', $iconParams) ? $this->data['icons'][$key]['size']  : '';
				$this->data['icons'][$key]['attributeList']  = array_key_exists('name', $iconParams) ? $this->data['icons'][$key]['attributeList']  : '';
			}
		}

		// Check if Button parameter array has keys
		$this->data['buttons'] = (!empty(array_filter($buttons))) ? $buttons : false;
		if ($this->data['buttons']) {
			foreach($this->data['buttons'] as $key => $buttonParams){
				$this->data['buttons'][$key]['href']  = array_key_exists('href', $buttonParams) ? $this->data['buttons'][$key]['href']  : '';
				$this->data['buttons'][$key]['text']  = array_key_exists('text', $buttonParams) ? $this->data['buttons'][$key]['text']  : '';
				$this->data['buttons'][$key]['name']  = array_key_exists('name', $buttonParams) ? $this->data['buttons'][$key]['name']  : '';
			}
		}

		//Has ripple
		if ($hasRipple) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

		// Add base class
		array_unshift($this->data['classList'], 'c-card');
	}
}
