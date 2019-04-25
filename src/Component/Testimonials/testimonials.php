<?php

namespace BladeComponentLibrary\Component\Testimonials;

class Testimonials extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['testimonials'] = !empty($this->data['testimonials']) && is_array($this->data['testimonials']) ? $this->data['testimonials'] : array();

        // Sanitize testimonials data
        $this->data['testimonials'] = array_map(
            function ($testimonial) {
                return array(
                'name' => $testomonial['name'] ?? '',
                'title' => $testimonial['title'] ?? '',
                'testimonial' => $testimonial['testimonial'] ?? '',
                'image' => $testimonial['image'] ?? ''
            );
            },
            $this->data['testimonials']
        );

        // Add base class
        array_unshift($this->data['classList'], 'testimonials');
    }
}
