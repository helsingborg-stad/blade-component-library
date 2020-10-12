<?php

namespace BladeComponentLibrary\Component\Collection;

class Collection extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if($compressed) {
            $this->data['classList'][] = $this->getBaseClass() . '--compressed'; 
        }

        if($list) {
            foreach($this->data['list'] as &$item) {
                if(is_string($item)) {
                    $item = array(
                        'content' => $item,
                    ); 
                }

                $item = array_merge(
                    [
                        'content' => false, 
                        'link' => false
                    ],
                    $item
                );
            }
        }
    }
}