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

        //Strto time timestamp
        if(is_array($timestamp) && !empty($timestamp)) {
            foreach($timestamp as &$item) {
                $item = strtotime($item);
            }
        } else {
            $timestamp = strtotime($timestamp);
        }

        //Always get a html timeformat
        $this->data['htmlDate'] = $this->formatDate($timestamp, $format);

        //Get the format needed
        if ($action == "formatDate") {
            $this->data['refinedDate'] = $this->formatDate($timestamp);
        } else if ($action == "timesince") {
            $this->data['refinedDate'] = $this->convertToHumanReadableUnit($timestamp, true);
        } else if ($action == "timeuntil") {
            $this->data['refinedDate'] = $this->convertToHumanReadableUnit($timestamp);
        }

        //Badge style data
        if($badge) {

            $this->data['classList'][] = $this->getBaseClass() . "--badge"; 

            //Get day number
            foreach(['Month' => 'M', 'Day' => 'j'] as $key => $dformat) {
                if(is_array($timestamp)) {
                    if(isset($timestamp[0])) {
                        $this->data['start' . $key ] = $this->formatDate($timestamp[0], $dformat); 
                    } else {
                        $this->data['start '. $key ] = false; 
                    }

                    if(isset($timestamp[1])) {
                        $this->data['end' . $key ] = $this->formatDate($timestamp[1], $dformat); 
                    } else {
                        $this->data['end' . $key ] = false; 
                    }
                } else {
                    $this->data['start'  . $key ] = $this->formatDate($timestamp, $dformat); 
                    $this->data['end' . $key ] = false; 
                }
            }

            $this->data['day'] = array_unique(array_filter([
                $this->data['startDay'],
                $this->data['endDay']
            ]));

            $this->data['month'] = array_unique(array_filter([
                $this->data['startMonth'],
                $this->data['endMonth']
            ])); 

        }
    }

    private function formatDate($timestamp, $format = 'D d M Y') {

        if(is_array($timestamp)) {
            $timestamp = array_pop($timestamp); 
        }

        return date($format, $timestamp);
    }

    /**
	 * Get time since a specified date
     * @param Date A timestamp of which date to count since
     * @return String Time since in words
	 */
    private function convertToHumanReadableUnit($time, $timeSince = false) {
        $time = $timeSince ? time() - $time : $time - time();
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
            $numberOfUnits = floor($time / $unit);

            if ($time > $unit) return $numberOfUnits.' '.$text.(($numberOfUnits>1) ? 's' : '');
        }

    }
}