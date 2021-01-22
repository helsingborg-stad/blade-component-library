<?php

namespace BladeComponentLibrary\Component\Nav;

use SubItem; 

class Nav extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Set default values to items array
        $this->data['items'] = $this->fillItemsData($items);

        //Endpoint for async fetching
        if(isset($endpoint)) {
            $this->data['attributeList']['data-endpoint'] = $endpoint; 
        }

        //Add unlist class
        $this->data['classList'][] = "unlist"; 

        //Direction of nav
        if($direction) {
            $this->data['classList'][] = $this->getBaseClass() . "--" . $direction; 
        }

        //Attributes
        $this->data['attributeList']['aria-orientation'] = $direction; 
    }

    public function fillItemsData($items)
    {
        if(is_array($items) && !empty($items)) {
            foreach ($items as $key => $item) {
                !isset($item['ancestor']) ? $item['ancestor'] = false : "";
                !isset($item['active']) ? $item['active'] = false : "";
                !isset($item['children']) ? $item['children'] = false : "";
                !isset($item['id']) ? $item['id'] = $item['label'] : "";

                if(is_array($item['children'])) {
                    $item['children'] = $this->fillItemsData($item['children']);
                }

                $items[$key] = $item;
            }
        }

        return $items;
    }
}
