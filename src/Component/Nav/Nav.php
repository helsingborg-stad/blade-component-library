<?php

namespace BladeComponentLibrary\Component\Sidebar;

class Sidebar extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['items'] = $this->fillItemsData($this->data['items']);

        if(isset($endpoints)) {
            $this->data['attributeList']['endpoint-children'] = $endpoints['children']; 
        }

        if(isset($top_items)) { 
            $this->data['top_items'] = $this->attributeItems($this->data['top_items']);
        }

        if (isset($top_items) & !isset($items)) {
            $this->data['attributeList']['js-sidebar--overflow-only'] = "";
        }
    }

    //Build attribute list for top items
    public function attributeItems($top_items)
    {
        foreach ($top_items as $key => $item)
        {
            if(isset($item['attributeList'])) {
                $attributeString = "";
                foreach ($item['attributeList'] as $attributeName => $attributeValue) 
                {
                    $attributeString = $attributeString . $attributeName . '=' . $attributeValue . ' ';
                }
                $top_items[$key]['attributeList'] = $attributeString;
            }
        }
        return $top_items;
    }

    public function fillItemsData($items)
    {
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
        return $items;
    }
}
