<?php

namespace BladeComponentLibrary\Component\Card;

class Card extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Mark as link
        if($href) {
            $this->data['classList'][] = $this->getBaseClass() . "--link";
        }

        //Show body?
        if(!empty(array_filter([$title, $content, $byline]))) {
            $this->data['showBody'] = true;
			$this->data['title'] = ($title) ? $title : null;
			$this->data['content'] = ($byline) ? $content : null;
			$this->data['byline'] = ($byline) ? $byline : null;
        } else {
            $this->data['showBody'] = false;
        }

		//Show Footer?
		if(!empty(array_filter([$buttons]))) {
			$this->data['showFooter'] = true;
			$this->data['buttons'] = ($buttons) ? $buttons : null;
		} else {
			$this->data['showFooter'] = false;
		}

        //Has ripple
        if($hasRipple) {
            $this->data['classList'][] = "ripple"; 
            $this->data['classList'][] = "ripple--before"; 
        }

        // Add base class
        array_unshift($this->data['classList'], 'c-card');
    }
}
