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

        // Calculate grid rows
        $perRow = ((int)$perRow > 0 && (int) $perRow <= 12) ? (int)$perRow : 1;
        $grid = is_int(12 / $perRow) ? 12 / $perRow : 12;

        $this->data['gridClasses'] = 'grid-xs-12 grid-sm-6 grid-lg-' . $grid;

        // Add base class
        array_unshift($this->data['classList'], 'c-testimonials');
    }
}
