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
        } else {
            $this->data['showBody'] = false;
        }

        // Add base class
        array_unshift($this->data['classList'], 'c-card');
    }
}
