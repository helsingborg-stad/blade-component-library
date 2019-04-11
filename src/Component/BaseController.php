<?php

namespace BladeComponentLibrary\Component;

class BaseController
{
    /**
     * Holds the view's data
     * @var array
     */
    protected $data = array(
        'class' => "", //Auto compiled from class list on data fetch
        'baseClass' => "",
        'classList' => [] //An array of class names (push classes here)
    );

    /**
     * Run init
     */
    public function __construct($data)
    {
        //Load input data 
        if(!is_null($data) && is_array($data)) {
            $this->data = array_merge($this->data, $data); 
        }

        //Run
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

        //Generate classes string
        $data['class'] = $this->getClass(); 
        $data['baseClass'] = $this->getBaseClass();

        //Return manipulated data array
        return (array) $data;
    }

    /**
     * Returns the classes
     * 
     * @return string Css classes
     */
    private function getClass($implode = true)
    {
        //Store locally
        if(isset($this->data['classList']) && is_array($this->data['classList'])) {
            $class = (array) $this->data['classList']; 
        } else {
            $class = array();
        }

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            $class = apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Class", $class);
        }

        //Applies a general wp filter
        if(function_exists('apply_filters')) {
            $class = apply_filters("BladeComponentLibrary/Component/Class", $class);
        }

        //Return manipulated classes as array
        if($implode === false) {
            return (array) $class; 
        }

        //Return manipulated data array as string
        return (string) implode(" ", (array) $class);
    }

    /**
     * Returns the classes
     * 
     * @return string Css classes
     */
    private function getBaseClass()
    {
        $classes = $this->getClass(false); 

        if(is_array($classes) && !empty($classes)) {
            return reset($classes); 
        }

        return ""; 
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