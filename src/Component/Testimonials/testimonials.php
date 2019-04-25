<?php

namespace BladeComponentLibrary\Component\Testimonials;

class Testimonials extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['testimonials'] = !empty($testimonials) && is_array($testimonials) ? $testimonials : array();

        // Sanitize testimonials data
        $this->data['testimonials'] = array_map(
            function ($testimonial) {
                return array(
                'name' => $testimonial['name'] ?? '',
                'title' => $testimonial['title'] ?? '',
                'testimonial' => $testimonial['testimonial'] ?? '',
                'image' => $testimonial['image'] ?? ''
            );
            },
            $testimonials
        );

        // Add base class
        array_unshift($this->data['classList'], 'testimonials');
    }
}
