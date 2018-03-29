<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyInformationType StructType
 * @subpackage Structs
 */
class AgencyInformationType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The AgencyID
     * @var int
     */
    public $AgencyID;
    /**
     * Constructor method for AgencyInformationType
     * @uses AgencyInformationType::set_()
     * @uses AgencyInformationType::setAgencyID()
     * @param string $_
     * @param int $agencyID
     */
    public function __construct($_ = null, $agencyID = null)
    {
        $this
            ->set_($_)
            ->setAgencyID($agencyID);
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
     * @return \StructType\AgencyInformationType
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
     * Get AgencyID value
     * @return int|null
     */
    public function getAgencyID()
    {
        return $this->AgencyID;
    }
    /**
     * Set AgencyID value
     * @param int $agencyID
     * @return \StructType\AgencyInformationType
     */
    public function setAgencyID($agencyID = null)
    {
        // validation for constraint: int
        if (!is_null($agencyID) && !is_numeric($agencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyID)), __LINE__);
        }
        $this->AgencyID = $agencyID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AgencyInformationType
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
