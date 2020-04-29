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

        $this->data['top_items'] = $this->attributeItems($top_items);

        if ($top_items & !$items) {
            $this->data['attributeList']['js-sidebar--overflow-only'] = "";
        }
    }

    public function attributeItems($top_items)
    {
        foreach ($top_items as $key => $item)
        {
            $string = "";
            foreach ($item['attributeList'] as $key2 => $value) 
            {
                $string = $string . $key2 . '=' . $value . ' ';
            }
            $top_items[$key]['attributeList'] = $string;
        }
        return $top_items;
    }
}
