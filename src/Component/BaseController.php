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
        'classList' => [] //An array of class names (push classes here)
    );

    /**
     * Run init
     */
    public function __construct()
    {
        $this->data = array_merge(
            $this->getComponentConfig($this),
            $this->data
        ); 

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
        if(isset($this->data['classList']) && is_array($this->data['classList'])) {
            $class = (array) $this->data['classList']; 
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

    /**
     * Load default vars from config
     * 
     * @return string
     */
    private function getComponentConfig($class) : array
    {

        //Get name of component loading
        $parts = array_unique(
            array_filter(
                explode(
                    "\\", 
                    str_replace(__NAMESPACE__, "", get_class($class))
                )
            )
        );

        //Check if can get
        if($componentName = array_pop($parts)) {

            //Locate config file
            $configFile = glob(BCL_BASEPATH . "src" . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . "*.json"); 

            //Get first occurance of config
            if(is_array($configFile) && !empty($configFile)) {
                $configFile = array_pop($configFile); 
            } else {
                throw new \Exception("No config file found in " . $path);
            }

            //Read config
            if(!$configJson = file_get_contents($configFile)) {
                throw new \Exception("Configuration file unreadable at " . $configFile);
            }

            //Check if valid json
            if(!$configJson = json_decode($configJson, true)) {
                throw new \Exception("Invalid formatting of configuration file in " . $configFile);
            }

            //Check for default data 
            if($configJson['default']) {
                return $configJson['default']; 
            }

        } 

        return array(); 
    } 
    
}