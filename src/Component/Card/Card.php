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

        // create - paper
		// create - image
		// create - title
		// create - byline
		// create - buttons
		// create - avatar
		// create - icons


        //Show body and Footer
		$this->data['showBody'] = (!empty(array_filter([$title, $content, $byline]))) ? true : false;
		$this->data['showFooter'] = (!empty(array_filter([$buttons])) || !empty(array_filter([$icons]))) ? true : false;

        //Has ripple
        if($hasRipple) {
            $this->data['classList'][] = "ripple"; 
            $this->data['classList'][] = "ripple--before"; 
        }

        // Add base class
        array_unshift($this->data['classList'], 'c-card');
    }
}
