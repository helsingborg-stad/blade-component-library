<?php

namespace BladeComponentLibrary\Component\Navbar;

/**
 * Class Card
 * @package BladeComponentLibrary\Component\Navbar
 */
class Navbar extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {

        // Extract array for eazy access (fetch only)
        extract($this->data);

        // Set the position of the logo
        $this->setLogoPosition($logoPosition, $linksPosition);

        // Set the colour of the top accent
        $this->setTopAccent($topAccent);

        // Set the colour of the active & hover accent
        $this->setActiveAccent($activeAccent);

        // Splits the nav items in half for layout
        $this->data['items'] = array_chunk($items, ceil(count($items)/2), true );
    }

    /**
	 * Builds the class for position of the logo
	 */
    public function setLogoPosition($logoPosition, $linksPosition) {
        if (isset($logoPosition)) {
            //Placement
            $placementClass = "c-navbar--logo__";

            isset($logoPosition) ? $placementClass
                = $placementClass.$logoPosition : "";
            
            if (!empty($linksPosition) &&
                $linksPosition != $logoPosition) {
                    $placementClass = $placementClass . "__items__" . $linksPosition;
            }

            $this->data['classList'][] = $placementClass;
        }
    }

    /**
	 * Builds class for top accent
	 */
    public function setTopAccent($topAccent) {
        if (isset($topAccent)) {
            $this->data['classList'][] =
                "c-navbar__top__accent--".$topAccent;
        }
    }

    /**
	 * Builds class for active & hover state colour
	 */
    public function setActiveAccent($activeAccent) {
        if (isset($activeAccent)) {
            $this->data['classList'][] =
                "c-navbar__active__accent--" . $activeAccent;
        }
    }
}
