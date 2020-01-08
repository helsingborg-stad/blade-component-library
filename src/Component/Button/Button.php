<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController
{

    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid("", true);

        // Specific configuration depending on the button type
        if ($isIconButton) {
            $this->setIconButton($hover, $toggle, $color);
        } elseif ($isOutlined) {
            $this->setOutlinedButton($color, $toggle, $size);
        } elseif ($isTextButton) {
            $this->setTextButton($color, $size);
        } else {
            $this->setBackground($background);
            $this->setSize($size);
        }

        // General configuration
        if ($reverseIcon) {
            $this->reverseIcon();
        }
        
        if ($floating) {
            $this->setFloating($floating);
        }
    
        if ($hasRipple) {
            $this->setRipple();
        }
    }

    private function setIconButton($hover, $toggle, $color)
    {
		$this->addToClassList("__icon");

        if ($toggle) {
            $this->setToggleAttributes(true, $color);
        }

        if (isset($hover['background'])) {
            $this->addToClassList('__icon-hover-background--' . $hover['background']);
        }

        if (isset($hover['color'])) {
            $this->addToClassList('__icon-hover-color--' . $hover['color']);
        }
    }

    private function setOutlinedButton($color, $toggle, $size)
    {
        $this->addToClassList("__outlined--" . $color);
        $this->setSize($size);

        if ($toggle) {
            $this->setToggleAttributes();
        }
    }

    private function setTextButton($color, $size)
    {
        $this->setSize($size);
        $this->addToClassList('__text');
        $this->addToClassList('__text--' . $color);
    }
    
    // Give the button a floating effect, with or without animation
    private function setFloating($floating)
    {
        if (isset($floating['animate']) && isset($floating['hover']) && $floating['animate'] && $floating['hover']) {
            $this->addToClassList("--animated-float-on-hover");
        } elseif (isset($floating['hover']) && $floating['hover']) {
            $this->addToClassList("--float-on-hover");
        }
    }

    // Set the background for any button except text and outlined
    private function setBackground($background)
    {
		$this->addToClassList("--" . $background);
    }

    // Set size for all buttons except icon buttons
    private function setSize($size)
    {
        $this->addToClassList("--" . $size);
    }

    // Apply ripple animation on click
    private function setRipple()
    {
        $this->addToClassList("ripple", true);
        $this->addToClassList("ripple--before", true);
    }

    // Reverse the icons position in relation to text
    private function reverseIcon()
    {
        $this->data['labelMod'] = '--reverse';
    }

    // Sett data attributes if toggle is set to true on an icon button or an outlined button
    private function setToggleAttributes($isIconButton = false, $color = false)
    {
        $toggleId = uniqid('', true);
        $this->data['attributeList']['js-toggle-trigger'] = $toggleId;
        $this->data['attributeList']['js-toggle-item'] = $toggleId;
        

        if ($isIconButton) {
            $this->addToClassList('__icon-toggle--' . $color);
        }
    }

    private function addToClassList($class, $withoutBaseClass = false)
    {
		$class = $withoutBaseClass ? $class : $this->getBaseClass() . $class;
		$this->data['classList'][] = $class;
    }
}
