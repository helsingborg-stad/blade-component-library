<?php

namespace BladeComponentLibrary\Component;

class BaseController
{
    /**
     * Holds the view's data
     * @var array
     */
    protected $data = array();

    /**
     * Run init
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Returns the data
     * 
     * @return array Data
     */
    public function getData()
    {
        //Store locally
        $data = $this->data; 

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Data", $data);
        }

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            apply_filters("BladeComponentLibrary/Component/Data", $data);
        }

        //Return manipulated data array
        return (array) $data; 
    }

    /**
     * Returns the classes
     * 
     * @return string Css classes
     */
    public function getClass()
    {
        //Store locally
        if(isset($this->data['class']) && is_array($this->data['class'])) {
            $class = (array) $this->data['class']; 
        } else {
            $class = array();
        }

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Class", $class);
        }

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            apply_filters("BladeComponentLibrary/Component/Class", $class);
        }

        //Return manipulated data array
        return (string) implode(" ", (array) $class);
    }

    /**
     * Creates a filter name
     * 
     * @return string
     */
    private function createFilterName($class) 
    {
        //Get all parts of the location
        $name = explode(
            "\\", 
            get_class($class)
        ); 

        //Remove duplicates
        $name = array_unique($name); 

        //Create string
        return implode(DIRECTORY_SEPARATOR, $name); 
    } 
}