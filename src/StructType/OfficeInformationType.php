<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfficeInformationType StructType
 * @subpackage Structs
 */
class OfficeInformationType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The OfficeID
     * @var int
     */
    public $OfficeID;
    /**
     * The TTBranchOfficeNumber
     * @var int
     */
    public $TTBranchOfficeNumber;
    /**
     * The TTAgencyNumber
     * @var int
     */
    public $TTAgencyNumber;
    /**
     * Constructor method for OfficeInformationType
     * @uses OfficeInformationType::set_()
     * @uses OfficeInformationType::setOfficeID()
     * @uses OfficeInformationType::setTTBranchOfficeNumber()
     * @uses OfficeInformationType::setTTAgencyNumber()
     * @param string $_
     * @param int $officeID
     * @param int $tTBranchOfficeNumber
     * @param int $tTAgencyNumber
     */
    public function __construct($_ = null, $officeID = null, $tTBranchOfficeNumber = null, $tTAgencyNumber = null)
    {
        $this
            ->set_($_)
            ->setOfficeID($officeID)
            ->setTTBranchOfficeNumber($tTBranchOfficeNumber)
            ->setTTAgencyNumber($tTAgencyNumber);
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
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType
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
     * Get OfficeID value
     * @return int|null
     */
    public function getOfficeID()
    {
        return $this->OfficeID;
    }
    /**
     * Set OfficeID value
     * @param int $officeID
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType
     */
    public function setOfficeID($officeID = null)
    {
        // validation for constraint: int
        if (!is_null($officeID) && !is_numeric($officeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($officeID)), __LINE__);
        }
        $this->OfficeID = $officeID;
        return $this;
    }
    /**
     * Get TTBranchOfficeNumber value
     * @return int|null
     */
    public function getTTBranchOfficeNumber()
    {
        return $this->TTBranchOfficeNumber;
    }
    /**
     * Set TTBranchOfficeNumber value
     * @param int $tTBranchOfficeNumber
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType
     */
    public function setTTBranchOfficeNumber($tTBranchOfficeNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tTBranchOfficeNumber) && !is_numeric($tTBranchOfficeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tTBranchOfficeNumber)), __LINE__);
        }
        $this->TTBranchOfficeNumber = $tTBranchOfficeNumber;
        return $this;
    }
    /**
     * Get TTAgencyNumber value
     * @return int|null
     */
    public function getTTAgencyNumber()
    {
        return $this->TTAgencyNumber;
    }
    /**
     * Set TTAgencyNumber value
     * @param int $tTAgencyNumber
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType
     */
    public function setTTAgencyNumber($tTAgencyNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tTAgencyNumber) && !is_numeric($tTAgencyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tTAgencyNumber)), __LINE__);
        }
        $this->TTAgencyNumber = $tTAgencyNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType
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
