<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperatorNameType StructType
 * @subpackage Structs
 */
class TourOperatorNameType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Shortname
     * @var string
     */
    public $Shortname;
    /**
     * Constructor method for TourOperatorNameType
     * @uses TourOperatorNameType::set_()
     * @uses TourOperatorNameType::setShortname()
     * @param string $_
     * @param string $shortname
     */
    public function __construct($_ = null, $shortname = null)
    {
        $this
            ->set_($_)
            ->setShortname($shortname);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\TourOperatorNameType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Shortname value
     * @return string|null
     */
    public function getShortname()
    {
        return $this->Shortname;
    }
    /**
     * Set Shortname value
     * @param string $shortname
     * @return \StructType\TourOperatorNameType
     */
    public function setShortname($shortname = null)
    {
        // validation for constraint: string
        if (!is_null($shortname) && !is_string($shortname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortname)), __LINE__);
        }
        $this->Shortname = $shortname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TourOperatorNameType
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
