<?php

namespace BladeComponentLibrary\Component\Navbar;

class Navbar extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if (isset($logoPosition)) {
            //Placement
            $placementClass = "c-navbar--logo__";
            isset($logoPosition) ? $placementClass = $placementClass.$logoPosition : "";
            
            if (isset($itemsPosition) && $itemsPosition != $logoPosition) {
                $placementClass = $placementClass . "__items__" . $itemsPosition;
            }

            $this->data['classList'][] = $placementClass;
        }

        $this->data['items'] = array_chunk($items, ceil(count($items)/2), true );
    }
}
