<?php

namespace BladeComponentLibrary\Component\Card;

/**
 * Class Card
 * @package BladeComponentLibrary\Component\Card
 */
class Card extends \BladeComponentLibrary\Component\BaseController
{

	public function init()
	{
		//Extract array for eazy access (fetch only)
		extract($this->data);

		// Check if Different view parts in use
		$this->setViewContainers();

		// Set ClassList for component
		$this->setClassListParameters();

		// Set Avatar parameters
		$this->setAvatarParameters();

		// Set Text parameters for title, byline, content
		$this->setTextParameters();

		// Set Icon parameters
		$this->setIconParameters();

		// Set Button parameters
		$this->setButtonParameters();

		// Set Dropdown parameters
		$this->setDropDownParameters();

		// Set Dropdown parameters
		$this->setAccordionParameters();
	}


	/**
	 * View containers such as Body and Footer
	 * @return array
	 */
	public function setViewContainers()
	{
		
		$this->data['showFooter'] = (
			empty($this->data['buttons']) &&
			empty($this->data['icons']) &&
			empty($this->data['bottom']) &&
			empty($this->data['dropdown'])
		) ? false : true;

		$this->data['top'] = empty($top) ? false : $top;
		$this->data['bottom'] = empty($bottom) ? false : $bottom;
	}


	/**
	 * ClassList parameters
	 * @return array
	 */
	public function setClassListParameters()
	{
        $this->data['classList'][] = ($this->data['href']) ? $this->getBaseClass() . "--link" : '';
        
        if ($this->data['dark_background']) {
            $this->data['classList'][] = $this->getBaseClass() . "__background--dark";
        }

		if ($this->data['hasRipple']) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

	}

	/**
	 * Avatar parameters
	 * @return array
	 */
	public function setAvatarParameters()
	{
		$this->data['avatar'] = (
			empty($this->data['avatar']['name']) && 
			empty($this->data['avatar']['image'])) 
			? false : $this->data['avatar'];
	}


	/**
	 * Text Parameters
	 * @return array
	 */
	public function setTextParameters()
	{
		$this->data['byline']['position'] = (!empty($this->data['byline']['position'])) ?
			$this->data['byline']['position'] : null;

		$this->data['byline']['text'] = (!empty($this->data['byline']['position'])) ?
			$this->data['byline']['text'] : null;

		$this->data['title']['position'] = (!empty($this->data['title']['position'])) ?
			$this->data['title']['position'] : null;

		$this->data['title']['text'] = (!empty($this->data['title']['text'])) ?
			$this->data['title']['text'] : null;

		$this->data['content'] = (!empty($this->data['content'])) ?
			$this->data['content'] : null;

	}


	/**
	 * Icon Parameteters
	 * @return array
	 */
	public function setIconParameters()
	{
		$this->data['icons'] = (!empty(array_filter($this->data['icons']))) ? $this->data['icons'] : false;

		if ($this->data['icons']) {
			foreach ($this->data['icons'] as $key => $iconParams) {
				$this->data['icons'][$key]['color'] = array_key_exists('color', $iconParams) ?
					$this->data['icons'][$key]['color'] : null;

				$this->data['icons'][$key]['size'] = array_key_exists('size', $iconParams) ?
					$this->data['icons'][$key]['size'] : null;

				$this->data['icons'][$key]['classList'] = array_key_exists('classList', $iconParams) ?
					$this->data['icons'][$key]['classList'] : [];

				$this->data['icons'][$key]['attributeList'] = array_key_exists('attributeList', $iconParams) ?
					$this->data['icons'][$key]['attributeList'] : [];
			}
		}
	}


	/**
	 * Dropdown parameters
	 * @return array
	 */
	public function setDropDownParameters()
	{
		if (!empty(array_filter($this->data['dropdown']))) {
			$this->data['dropdown']["position"] = (!empty($this->data['dropdown']['position'])) ?
				$this->data['dropdown']['position'] : null;

			$this->data['dropdown']["direction"] = (!empty($this->data['dropdown']['direction'])) ?
				$this->data['dropdown']['direction'] : null;

			$this->data['dropdown']["items"] = (!empty(array_filter($this->data['dropdown']['items']))) ?
				$this->data['dropdown']['items'] : null;

			foreach ($this->data['dropdown']["items"] as $keyDrop => $dropParams) {
				$this->data['dropdown']['text'] = (!empty($dropParams[$keyDrop]['text'])) ?
					$this->data['dropdown']['text'] : null;

				$this->data['dropdown']['link'] = (!empty($dropParams[$keyDrop]['link'])) ?
					$this->data['dropdown']['link'] : null;
			}
		}
	}


	/**
	 * Button parameters
	 * @return array
	 */
	public function setButtonParameters()
	{
		$this->data['buttons'] = (!empty($this->data['buttons'])) ?
			$this->data['buttons'] : false;
	}

	/**
	 * Accordion parameters
	 * @return array
	 */
	public function setAccordionParameters()
	{
		if (!empty(array_filter($this->data['accordion']))) {

			$this->data['accordion']["items"] = (!empty(array_filter($this->data['accordion']['items']))) ?
				$this->data['accordion']['items'] : null;

			$this->data['accordion']["classList"] = (!empty($this->data['accordion']['classList'])) ?
				$this->data['accordion']['classList'] : null;

			foreach ($this->data['accordion']["items"] as $keyInt => $accordionParams) {
				$this->data['accordion']['heading'] = (!empty($accordionParams[$keyInt]['heading'])) ?
					$this->data['accordion']['heading'] : null;

				$this->data['accordion'][$keyInt]['content'] = (!empty($accordionParams[$keyInt]['content'])) ?
					$this->data['accordion'][$keyInt]['content'] : null;
			}
		}
	}
}
