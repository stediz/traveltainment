<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The Stars
     * @var float
     */
    public $Stars;
    /**
     * The MinStars
     * @var float
     */
    public $MinStars;
    /**
     * The MaxStars
     * @var float
     */
    public $MaxStars;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setStars()
     * @uses CategoryType::setMinStars()
     * @uses CategoryType::setMaxStars()
     * @param float $stars
     * @param float $minStars
     * @param float $maxStars
     */
    public function __construct($stars = null, $minStars = null, $maxStars = null)
    {
        $this
            ->setStars($stars)
            ->setMinStars($minStars)
            ->setMaxStars($maxStars);
    }
    /**
     * Get Stars value
     * @return float|null
     */
    public function getStars()
    {
        return $this->Stars;
    }
    /**
     * Set Stars value
     * @param float $stars
     * @return \StructType\CategoryType
     */
    public function setStars($stars = null)
    {
        $this->Stars = $stars;
        return $this;
    }
    /**
     * Get MinStars value
     * @return float|null
     */
    public function getMinStars()
    {
        return $this->MinStars;
    }
    /**
     * Set MinStars value
     * @param float $minStars
     * @return \StructType\CategoryType
     */
    public function setMinStars($minStars = null)
    {
        $this->MinStars = $minStars;
        return $this;
    }
    /**
     * Get MaxStars value
     * @return float|null
     */
    public function getMaxStars()
    {
        return $this->MaxStars;
    }
    /**
     * Set MaxStars value
     * @param float $maxStars
     * @return \StructType\CategoryType
     */
    public function setMaxStars($maxStars = null)
    {
        $this->MaxStars = $maxStars;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CategoryType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
