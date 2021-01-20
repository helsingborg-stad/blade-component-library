<?php

namespace BladeComponentLibrary\Component;

class BaseController
{
    /**
     * Holds the view's data
     * @var array
     */
    protected $data = array(
        'id' => '', //Unique dom id
        'class' => "", //Auto compiled from class list on data fetch
        'baseClass' => "",
        'classList' => [], //An array of class names (push classes here),
        'attribute' => "",
        'attributeList' => []
    );

    /**
     * Unique id
     * @var array
     */
    private $uid = null;

    /**
     * Run init
     */
    public function __construct($data)
    {
        //Load input data
        if (!is_null($data) && is_array($data)) {
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

        //Generate classes string
        $data['class'] = $this->getClass();
        $data['baseClass'] = $this->getBaseClass();

        //Create attibute string
        $data['attribute'] = $this->getAttribute();

        //Create id strings
        $data['id'] = $this->getId(); //"static" id dependent on the content
        $data['uid'] = $this->getUid(); //"random" id
        
        //Key for if slot contains any data
        $data['slotHasData'] = !empty($this->accessProtected($this->data['slot'], "html"));

        //Public methods accesible within views
        $data['buildAttributes'] = function ($attributes = array()) {
            if (!is_array($attributes) || empty($attributes)) {
                return (string) '';
            }

            return (string) self::buildAttributes($attributes);
        };

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $data = apply_filters("BladeComponentLibrary/Component/Data", $data);
        }

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $data = apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Data", $data);
        }

        //Applies single filter for each data item (class and data exepted)
        if (function_exists('apply_filters')) {
            if (is_array($data) && !empty($data)) {
                foreach ($data as $key => $item) {
                    if (!in_array($key, array("data", "classes"))) {
                        $data[$key] = apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . ucfirst($key), $data[$key]);
                    }
                }
            }
        }

        //Return manipulated data array
        return (array) $data;
    }

    /**
     * Returns set or dynamic id
     *
     * @return string Id of the component
     */
    private function getId()
    {
        //Store locally
        if (isset($this->data['id']) && !empty($this->data['id'])) {
            $id = (string) $this->data['id'];
        } else {
            $id = uniqid();
        }

        return (string) strtolower($id);
    }

    /**
     * Returns and sets a dynamic id
     *
     * @return string Random id
     */
    public function getUid()
    {
        if (!is_null($this->uid)) {
            return $this->uid;
        }
        return $this->uid = uniqid();
    }
    
    /**
     * Returns the classes
     *
     * @return string Css classes
     */
    private function getClass($implode = true)
    {
        //Store locally
        if (isset($this->data['classList']) && is_array($this->data['classList'])) {
            array_unshift(
                $this->data['classList'],
                (string) $this->getBaseClass()
            );

            $class = (array) $this->data['classList'];
        } else {
            $class = array();
        }

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $class = apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Class", $class);
        }

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $class = apply_filters("BladeComponentLibrary/Component/Class", $class);
        }

        //Return manipulated classes as array
        if ($implode === false) {
            return (array) $class;
        }

        //Return manipulated data array as string
        return (string) implode(" ", (array) $class);
    }

    /**
     * Get setting of container awareness
     *
     * @return boolean Boolean to indicate if container awareness is on or off
     */
    private function getContainerAware()
    {
        //Store locally
        if (isset($this->data['containerAware'])) {
            return (bool) $this->data['containerAware'];
        } else {
            return false;
        }
    }

    /**
     * Returns the first class assigned, used as base class
     *
     * @return string A single css class
     */
    protected function getBaseClass()
    {
        //If base class is specified from component controller then use that
        if ($this->data['baseClass']) {
            return $this->data['baseClass'];
        }
        
        //Get all parts of the location
        $namespaceParts = explode(
            "\\",
            get_called_class()
        );

        //Create string
        return strtolower("c-" . end($namespaceParts));
    }

    private function getAttribute($implode = true)
    {

        //Store locally
        if (isset($this->data['attributeList']) && is_array($this->data['attributeList'])) {
            $attribute = (array) $this->data['attributeList'];
        } else {
            $attribute = array();
        }

        //Add attribute for container awareness
        if($this->getContainerAware() == true) {
            $attribute['data-observe-resizes'] = "";
        }

        //Add unique id
        $attribute['data-uid'] = $this->getUid();

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $attribute = apply_filters($this->createFilterName($this) . DIRECTORY_SEPARATOR . "Attribute", $attribute);
        }

        //Applies a general wp filter
        if (function_exists('apply_filters')) {
            $attribute = apply_filters("BladeComponentLibrary/Component/Attribute", $attribute);
        }

        //Return manipulated classes as array
        if ($implode === false) {
            return (array) $attribute;
        }

        //Return manipulated data array as string
        return (string) self::buildAttributes($attribute);
    }

    public static function buildAttributes($attributes)
    {
        return (string) implode(
            ' ',
            array_map(
                function ($v, $k) {
                    return sprintf('%s="%s"', $k, $v);
                },
                array_values($attributes),
                array_keys($attributes)
            )
        );
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
     * Proxy for accessing private props
     *
     * @return string Array of values
     */
    public function accessProtected($obj, $prop)
    {
        $reflection = new \ReflectionClass($obj);
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);
        return $property->getValue($obj);
    }
}
