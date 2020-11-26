<?php

namespace BladeComponentLibrary\Component\Slider;

class Slider extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid("", true);
        $this->data['attributeList']['data-step'] = 0;
        $this->data['attributeList']['js-slider'] = 0;
        $this->data['attributeList']['js-slider-index'] = 0;
        $this->data['attributeList']['js-slider-index'] = 0;
        $this->data['attributeList']['js-slider-repeat'] = $repeatSlide;
        
        $ratio = preg_replace('/:/i', '-', $ratio);
        $this->data['classList'][] = 'c-slider--' . $ratio;

        if ($peekSlides) {
            $this->data['classList'][] = 'c-slider__peek';
        }

        if ($navigationHover) {
            $this->data['classList'][] = 'c-slider__navigation--hover';
        }

        if ($autoSlide) {
            $delay = is_int($autoSlide) ? $autoSlide : 5;
            $this->data['attributeList']['js-slider__autoslide'] = $delay;
        }
        
    }
}
