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

		$compParams = [
			'title' => $title,
			'content' => $content,
			'byline' => $byline,
			'dropdown' => $dropdown,
			'icons' => $icons,
			'avatar' => $avatar,
			'buttons' => $buttons,
			'bottom' => $bottom,
			'href' => $href,
			'hasRipple' => $hasRipple
		];

		// Check if Different view parts in use
		$this->setViewContainers($compParams);

		// Set ClassList for component
		$this->setClassListParameters($compParams);

		// Set Avatar parameters
		$this->setAvatarParameters($compParams);

		// Set Text parameters for title, byline, content
		$this->setTextParameters($compParams);

		// Set Icon parameters
		$this->setIconParameters($compParams);

		// Set Button parameters
		$this->setButtonParameters($compParams);

		// Set Dropdown parameters
		$this->setDropDownParameters($compParams);

		array_unshift($this->data['classList'], 'c-card');
	}


	/**
	 * View containers such as Body and Footer
	 * @param $compParams
	 * @return array
	 */
	public function setViewContainers($compParams)
	{
		$this->data['showBody'] = (!empty(array_filter([$compParams['title'], $compParams['content'],
			$compParams['byline']]))) ? true : false;

		$this->data['showFooter'] = (!empty(array_filter([$compParams['buttons']]))
			|| !empty(array_filter([$compParams['icons']])) || !empty($compParams['bottom']) ||
			!empty($compParams['dropdown'])) ? true : false;

		return $this->data;
	}


	/**
	 * ClassList parameters
	 * @param $compParams
	 * @return array
	 */
	public function setClassListParameters($compParams)
	{
		$this->data['classList'][] = ($compParams['href']) ? $this->getBaseClass() . "--link" : '';

		if ($compParams['hasRipple']) {
			$this->data['classList'][] = "ripple";
			$this->data['classList'][] = "ripple--before";
		}

		return $this->data;
	}


	/**
	 * Avatar parameters
	 * @param $compParams
	 * @return array
	 */
	public function setAvatarParameters($compParams)
	{
		$this->data['avatarImage'] = (isset($compParams['avatar']['image']) &&
			!empty($compParams['avatar']['image'])) ? $compParams['avatar']['image'] : null;

		$this->data['avatarName'] = (isset($compParams['avatar']['name']) &&
			!empty($compParams['avatar']['name'])) ? $compParams['avatar']['name'] : null;

		return $this->data;
	}


	/**
	 * Text Parameters
	 * @param $compParams
	 * @return array
	 */
	public function setTextParameters($compParams)
	{
		$this->data['byline']['position'] = (isset($compParams['byline']['position']) &&
			!empty($compParams['byline']['position'])) ? $compParams['byline']['position'] : null;

		$this->data['byline']['text'] = (isset($compParams['byline']['text']) &&
			!empty($compParams['byline']['position'])) ? $compParams['byline']['text'] : null;

		$this->data['title']['position'] = (isset($compParams['title']['text']) &&
			!empty($compParams['title']['position'])) ? $compParams['title']['position'] : null;

		$this->data['title']['text'] = (isset($compParams['title']['text']) &&
			!empty($compParams['title']['text'])) ? $compParams['title']['text'] : null;

		$this->data['content'] = (isset($compParams['content']) &&
			!empty($compParams['content'])) ? $compParams['content'] : null;

		return $this->data;
	}


	/**
	 * Icon Parameteters
	 * @param $compParams
	 * @return array
	 */
	public function setIconParameters($compParams)
	{
		$this->data['icons'] = (!empty(array_filter($compParams['icons']))) ? $compParams['icons'] : false;

		if ($this->data['icons']) {
			foreach ($this->data['icons'] as $key => $iconParams) {
				$this->data['icons'][$key]['color'] = array_key_exists('color', $iconParams) ?
					$this->data['icons'][$key]['color'] : '';

				$this->data['icons'][$key]['size'] = array_key_exists('size', $iconParams) ?
					$this->data['icons'][$key]['size'] : '';

				$this->data['icons'][$key]['classList'] = array_key_exists('classList', $iconParams) ?
					$this->data['icons'][$key]['classList'] : [];

				$this->data['icons'][$key]['attributeList'] = array_key_exists('attributeList', $iconParams) ?
					$this->data['icons'][$key]['attributeList'] : [];
			}
		}

		return $this->data;
	}


	/**
	 * Dropdown parameters
	 * @param $compParams
	 * @return array
	 */
	public function setDropDownParameters($compParams)
	{
		if (!empty(array_filter($compParams['dropdown']))) {
			$this->data['dropdown']["position"] = (!empty($compParams['dropdown']['position'])) ?
				$compParams['dropdown']['position'] : null;

			$this->data['dropdown']["direction"] = (!empty($compParams['dropdown']['direction'])) ?
				$compParams['dropdown']['direction'] : null;

			$this->data['dropdown']["items"] = (!empty(array_filter($compParams['dropdown']['items']))) ?
				$compParams['dropdown']['items'] : null;

			foreach ($this->data['dropdown']["items"] as $keyDrop => $dropParams) {
				$this->data['dropdown']['text'] = (!empty($dropParams[$keyDrop]['text'])) ?
					$this->data['dropdown']['text'] : '';

				$this->data['dropdown']['link'] = (!empty($dropParams[$keyDrop]['link'])) ?
					$this->data['dropdown']['link'] : '';
			}
		}

		return $this->data;
	}


	/**
	 * @param $compParams
	 * @return array
	 */
	public function setButtonParameters($compParams)
	{
		$this->data['buttons'] = (!empty(array_filter($compParams['buttons']))) ? $compParams['buttons'] : false;
		if ($this->data['buttons']) {
			foreach ($this->data['buttons'] as $key => $buttonParams) {
				$this->data['buttons'][$key]['href'] = array_key_exists('href', $buttonParams) ?
					$this->data['buttons'][$key]['href'] : '';

				$this->data['buttons'][$key]['text'] = array_key_exists('text', $buttonParams) ?
					$this->data['buttons'][$key]['text'] : '';

				$this->data['buttons'][$key]['name'] = array_key_exists('name', $buttonParams) ?
					$this->data['buttons'][$key]['name'] : '';
			}
		}

		return $this->data;
	}
}
