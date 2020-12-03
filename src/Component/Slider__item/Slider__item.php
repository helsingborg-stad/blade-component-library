<?php

namespace BladeComponentLibrary\Component\Slider__item;

class Slider__item extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        if (!empty($theme)) {
            $this->data['classList'][] = $this->getBaseClass() . "--" . $theme;
        }

        if (!empty($layout)) {
            $this->data['classList'][] = $this->getBaseClass() . "--layout-" . $layout;
        }

        if (!empty($background_image)) {
            $this->data['attributeList']['style'] = "background-image: url('".$background_image."');";
        }

        if (!empty($title) || !empty($sub_title) ||!empty($text) || !empty($bottom)) {
            $this->data['showContainer'] = true;
        }
    }
}
