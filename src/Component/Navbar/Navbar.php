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
        
        // Encapsulates component data expose it globally for class
        $this->compParams = [
            'logoPosition'  => $logoPosition,
            'linksPosition' => $linksPosition,
            'topAccent'     => $topAccent,
            'activeAccent'  => $activeAccent
        ];

        // Set the position of the logo
        $this->setLogoPosition();

        // Set the colour of the top accent
        $this->setTopAccent();

        // Set the colour of the active & hover accent
        $this->setActiveAccent();

        // Splits the nav items in half for layout
        $this->data['items'] = array_chunk($items, ceil(count($items)/2), true );
    }

    /**
	 * Builds the class for position of the logo
	 * @return array
	 */
    public function setLogoPosition() {
        if (isset($this->compParams['logoPosition'])) {
            //Placement
            $placementClass = "c-navbar--logo__";

            isset($this->compParams['logoPosition']) ? $placementClass
                = $placementClass.$this->compParams['logoPosition'] : "";
            
            if (!empty($this->compParams['linksPosition']) &&
                $this->compParams['linksPosition'] != $this->compParams['logoPosition']) {
                    $placementClass = $placementClass . "__items__" . $this->compParams['linksPosition'];
            }

            $this->data['classList'][] = $placementClass;
        }

        return $this->data;
    }

    /**
	 * Builds class for top accent
	 * @return array
	 */
    public function setTopAccent() {
        if (isset($this->compParams['topAccent'])) {
            $this->data['classList'][] =
                "c-navbar__top__accent--".$this->compParams['topAccent'];
        }

        return $this->data;
    }

    /**
	 * Builds class for active & hover state colour
	 * @return array
	 */
    public function setActiveAccent() {
        if (isset($this->compParams['topAccent'])) {
            $this->data['classList'][] =
                "c-navbar__active__accent--" . $this->compParams['activeAccent'];
        }

        return $this->data;
    }
}
