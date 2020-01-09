<?php

namespace BladeComponentLibrary\Component\Date;

/**
 * Class Dropdown
 * @package BladeComponentLibrary\Component\Date
 */
class Date extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if ($action == "timesince") {
            $this->data['refinedDate'] = $this->getTimeSince(strtotime($timestamp));
        } else if ($action == "timeuntil") {
            $this->data['refinedDate'] = $this->getTimeUntil(strtotime($timestamp));
        }
    }

    /**
	 * Get time since a specified date
     * @param Date A timestamp of which date to count since
     * @return String Time since in words
	 */
    public function getTimeSince($time) {
        $time = time() - $time; // to get the time since that moment
        $time = ($time < 1) ? 1 : $time;
        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1) ? 's' : '');
        }

    }

    /**
	 * Get time until a specified date
     * @param Date A timestamp of which date to count until
     * @return String Time until in words
	 */
    public function getTimeUntil($time) {
        $time = $time - time() ; // to get the time since that moment
        $time = ($time < 1) ? 1 : $time;
        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1) ? 's' : '');
        }

    }
}