<?php

namespace BladeComponentLibrary\Component\Slider__item;

class Slider__item extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        if (!empty($containerColor)) {
            $this->data['classList'][] = $this->getBaseClass() . "--bg-" . $containerColor;
        }

        if (!empty($textColor)) {
            $this->data['classList'][] = $this->getBaseClass() . "--text-" . $textColor;
        }

        if (!empty($layout)) {
            $this->data['classList'][] = $this->getBaseClass() . "--layout-" . $layout;
        }

        if(!empty($desktop_image) && empty($mobile_image)) {
            $this->data['classList'][] = $this->getBaseClass() . "--no-mobile-image";
        }

        if (!empty($background_image)) {
            $this->data['attributeList']['style'] = "background-image: url('".$background_image."');";
        }

        $this->data['showContainer'] = false;
        if (!empty($title) || !empty($sub_title) ||!empty($text) || !empty($bottom)) {
            $this->data['showContainer'] = true;
        }
    }
}
