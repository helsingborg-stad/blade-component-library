<?php

namespace BladeComponentLibrary\Component\Card;

class Card extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Give base class
        $this->data['classList'][] = "c-card"; 

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
        
    }
}