<?php

namespace BladeComponentLibrary\Component\Breadcrumb;

class Breadcrumb extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "c-breadcrumb"; 

        //Adds icon directives
        if($list && is_array($list) && !empty($list)) {

            foreach($this->data['list'] as $key => $item) {
                if(!isset($this->data['list'][$key]['icon'])) {

                    if($key) {
                        $this->data['list'][$key]['icon'] = "chevron-right";
                    } else {
                        $this->data['list'][$key]['icon'] = "bookmark";
                    }
                }
            }
        }
    }
}