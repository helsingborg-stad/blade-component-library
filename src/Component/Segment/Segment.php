<?php

namespace BladeComponentLibrary\Component\Segment;

class Segment extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);


        $this->data['classList'][] = $this->getBaseClass() . "--template-" . $template;

        //Full template
        if($template == "full") {
            $this->getFullTemplateData($image, $background_color); 
        }

        if($template == "split") {
            $this->getSplitTemplateData($card); 
        }

        if($template == "featured") {
            $this->getFeaturedTemplateData($card); 
        }

        $this->getContainment($containContent);
        $this->getOrder($reverse_layout);
        $this->getImageFocus($image_focus);
        $this->getContentAlignment($content_alignment);
        $this->getMobileLayout($mobile_layout);
        $this->getTextAlignment($text_alignment);
        
    }

    private function getFullTemplateData($image, $bg_color) {
        //Inline css
        $styles = []; 
        //$styles['background-image'] = ; 

        if ($image != "") {
            $this->data['attributeList']['style'] = "background-image: url('".$image."');";
        } else {
            $this->data['attributeList']['style'] = "background-color: $bg_color;";
        }

        $this->data['classList'][] = $this->getBaseClass() . "--padding-md";
        $this->data['classList'][] = $this->getBaseClass() . "--height-lg";
        $this->data['classList'][] = $this->getBaseClass() . "--valign-middle";
        $this->data['classList'][] = $this->getBaseClass() . "--overlay-dark";
        $this->data['classList'][] = $this->getBaseClass() . "--color-light";
        $this->data['classList'][] = $this->getBaseClass() . "--overlay-opacity-medium";
        $this->data['classList'][] = $this->getBaseClass() . "--effect-paralax";

    }

    private function getSplitTemplateData($card) {
        $this->getCardSettings($card);

        $this->data['classList'][] = $this->getBaseClass() . "--height-md";
        $this->data['classList'][] = $this->getBaseClass() . "--valign-middle";
    }

    private function getFeaturedTemplateData($card) {
        $this->getCardSettings($card);
        
    }

    private function getContainment($containContent) {
        $containContent ? '' :
            $this->data['classList'][] = $this->getBaseClass() . "--not-contained";
    }

    private function getOrder($reverse_layout) {
        $reverse_layout ?
            $this->data['classList'][] = $this->getBaseClass() . "--reverse-layout"
            : '';
    }

    public function getImageFocus($image_focus) {
        $this->data['classList'][] =
            $this->getBaseClass() .
                "--image-focus-{$image_focus['horizontal']}-{$image_focus['vertical']}";
    }

    public function getContentAlignment($content_alignment) {
        // Align vertical
        $v_align = [
            'center'    => '--valign-center',
            'top'       => '--valign-top',
            'bottom'    => '--valign-bottom'
        ];

        $this->data['classList'][] =
            $this->getBaseClass() . $v_align[$content_alignment['vertical']];

        // Align horizontal
        $h_align = [
            'center'    => '--align-center',
            'left'      => '--align-left',
            'right'     => '--align-right',
        ];

        $this->data['classList'][] =
            $this->getBaseClass() . $h_align[$content_alignment['horizontal']];
    }

    public function getMobileLayout($mobile_layout) {
        $this->data['classList'][] =
            $this->getBaseClass() . "--graphics-" . $mobile_layout['graphics'];
    }

    public function getTextAlignment($text_alignment) {
        $this->data['classList'][] =
            $this->getBaseClass() . "--text-alignment-" . $text_alignment;
    }

    public function getCardSettings($card) {
        if (!empty($card) && $card['isCard']) {
            $this->data['classList'][] =
                $this->getBaseClass() . "--card";

            $this->data['classList'][] =
                $this->getBaseClass() . "--card-" . $card['background'];

            $this->data['classList'][] =
                $this->getBaseClass() . "--card-padding-" . $card['padding'];
        }
    }
}