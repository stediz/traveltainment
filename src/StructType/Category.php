<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Category StructType
 * Meta informations extracted from the WSDL
 * - maxInclusive: 5
 * - minInclusive: 1
 * @subpackage Structs
 */
class Category extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxInclusive: 5
     * - minInclusive: 1
     * @var int
     */
    public $_;
    /**
     * The Weightage
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxInclusive: 100
     * - minInclusive: 0
     * @var int
     */
    public $Weightage;
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
     * Constructor method for Category
     * @uses Category::set_()
     * @uses Category::setWeightage()
     * @uses Category::setStars()
     * @uses Category::setMinStars()
     * @uses Category::setMaxStars()
     * @param int $_
     * @param int $weightage
     * @param float $stars
     * @param float $minStars
     * @param float $maxStars
     */
    public function __construct($_ = null, $weightage = '0', $stars = null, $minStars = null, $maxStars = null)
    {
        $this
            ->set_($_)
            ->setWeightage($weightage)
            ->setStars($stars)
            ->setMinStars($minStars)
            ->setMaxStars($maxStars);
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \StructType\Category
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxInclusive
        if ($_ > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 5, "%s" given', $_), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($_ < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $_), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($_) && !is_numeric($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Weightage value
     * @return int|null
     */
    public function getWeightage()
    {
        return $this->Weightage;
    }
    /**
     * Set Weightage value
     * @param int $weightage
     * @return \StructType\Category
     */
    public function setWeightage($weightage = '0')
    {
        // validation for constraint: maxInclusive
        if ($weightage > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 100, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($weightage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $weightage), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($weightage) && !is_numeric($weightage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weightage)), __LINE__);
        }
        $this->Weightage = $weightage;
        return $this;
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
     * @return \StructType\Category
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
     * @return \StructType\Category
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
     * @return \StructType\Category
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
     * @return \StructType\Category
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
