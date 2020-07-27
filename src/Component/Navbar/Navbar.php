<?php

namespace BladeComponentLibrary\Component\Navbar;

/**
 * Class Card
 * @package BladeComponentLibrary\Component\Navbar
 */
class Navbar extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {

        // Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['items'] = $this->fillItemsData($this->data['items']);

        if($this->data['isDynamic']) {
            $this->data['attributeList']['js-is-dynamic'] = '';

            if(isset($childItemsUrl)) {
                $this->data['attributeList']['js-child-items-url'] = $childItemsUrl;
            }
        }

        if(isset($this->data['multiDimenexpanded_menusional'])) {
            foreach($this->data['expanded_menu'] as $key => $value){
                $this->data['expanded_menu'][$key]['id'] = isset($this->data['expanded_menu'][$key]['id']) ? $this->data['expanded_menu'][$key]['id'] :  null;
            }
        }

        if(isset($this->data['pageID'])) {
            $this->data['attributeList']['data-page-id'] = $this->data['pageID'];
        }

        if(isset($this->data['pageParentID'])) {
            $this->data['attributeList']['data-page-parent-id'] = $this->data['pageParentID'];
        }
    }

    public function fillItemsData($items)
    {
        foreach ($items as $key => $item) {
            !isset($item['ancestor']) ? $items[$key]['ancestor'] = false : "";
            !isset($item['active']) ? $items[$key]['active'] = false : "";
            !isset($item['children']) ? $items[$key]['children'] = false : "";
        }

        return $items;
    }
}
