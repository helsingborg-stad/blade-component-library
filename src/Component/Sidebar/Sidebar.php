<?php

namespace BladeComponentLibrary\Component\Sidebar;

class Sidebar extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if(isset($childItemsUrl)) {
            $this->data['attributeList']['child-items-url'] = $childItemsUrl; 
        }

        $this->data['top_items'] = $this->attributeItems($this->data['top_items']);

        if ($top_items & !$items) {
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
}
