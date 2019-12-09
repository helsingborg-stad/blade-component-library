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
            $this->getFullTemplateData(); 
        }

        if($template == "split") {
            $this->getSplitTemplateData(); 
        }

        if($template == "featured") {
            $this->getFeaturedTemplateData(); 
        }

        $this->getContainment();
        $this->getOrder();
        $this->getImageFocus();
        $this->getContentAlignment();
        $this->getMobileLayout();
        $this->getTextAlignment();
        
    }

    private function getFullTemplateData() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Inline css
        $styles = []; 
        //$styles['background-image'] = ; 

        if ($image != "") {
            $this->data['attributeList']['style'] = "background-image: url('".$image."');";
        } else {
            $this->data['attributeList']['style'] = "background-color: $background_color;";
        }

        $this->data['classList'][] = $this->getBaseClass() . "--padding-md";
        $this->data['classList'][] = $this->getBaseClass() . "--height-lg";
        $this->data['classList'][] = $this->getBaseClass() . "--valign-middle";
        $this->data['classList'][] = $this->getBaseClass() . "--overlay-dark";
        $this->data['classList'][] = $this->getBaseClass() . "--color-light";
        $this->data['classList'][] = $this->getBaseClass() . "--overlay-opacity-medium";
        $this->data['classList'][] = $this->getBaseClass() . "--effect-paralax";

    }

    private function getSplitTemplateData() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->getCardSettings();

        $this->data['classList'][] = $this->getBaseClass() . "--height-md";
        $this->data['classList'][] = $this->getBaseClass() . "--valign-middle";
    }

    private function getFeaturedTemplateData() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->getCardSettings();
        
    }

    private function getContainment() {
        //Extract array for easy access
        extract($this->data);

        $containContent ? '' :
            $this->data['classList'][] = $this->getBaseClass() . "--not-contained";
    }

    private function getOrder() {
        //Extract array for easy access
        extract($this->data);

        $reverse_layout ?
            $this->data['classList'][] = $this->getBaseClass() . "--reverse-layout"
            : '';
    }

    public function getImageFocus() {
        //Extract array for easy access
        extract($this->data);

        $this->data['classList'][] =
            $this->getBaseClass() .
                "--image-focus-{$image_focus['horizontal']}-{$image_focus['vertical']}";
    }

    public function getWidth() {
        //Extract array for easy access
        extract($this->data);

        $this->data['classList'][] =
            $this->getBaseClass() .
                "--image-focus-{$image_focus['horizontal']}-{$image_focus['vertical']}";
    }

    public function getContentAlignment() {
        //Extract array for easy access
        extract($this->data);

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

    public function getMobileLayout() {
        //Extract array for easy access
        extract($this->data);

        $this->data['classList'][] =
            $this->getBaseClass() . "--graphics-" . $mobile_layout['graphics'];
    }

    public function getTextAlignment() {
        //Extract array for easy access
        extract($this->data);

        $this->data['classList'][] =
            $this->getBaseClass() . "--text-alignment-" . $text_alignment;
    }

    public function getCardSettings() {
        //Extract array for easy access
        extract($this->data);

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