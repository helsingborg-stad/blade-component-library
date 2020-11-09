<?php

namespace BladeComponentLibrary\Component\Signature;

class Signature extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = $this->getBaseClass() . "--space-" . count(array_filter([$updated, $published])); 

        //Component element
        if($link) {
            $this->data['componentElement'] = "a"; 
            $this->data['attributeList'] = ['href' => $link]; 
		} else {
			$this->data['componentElement'] = "div"; 
        }

        //Labels
        $this->data['label'] = (object) [
            'publish' => $publishedLabel,
            'updated' => $updatedLabel
        ]; 

    }
}
