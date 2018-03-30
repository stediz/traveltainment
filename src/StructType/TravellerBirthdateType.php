<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerBirthdateType StructType
 * @subpackage Structs
 */
class TravellerBirthdateType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ID;
    /**
     * The Birthdate
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Birthdate;
    /**
     * The AgeQualifier
     * @var string
     */
    public $AgeQualifier;
    /**
     * Constructor method for TravellerBirthdateType
     * @uses TravellerBirthdateType::setID()
     * @uses TravellerBirthdateType::setBirthdate()
     * @uses TravellerBirthdateType::setAgeQualifier()
     * @param string $iD
     * @param string $birthdate
     * @param string $ageQualifier
     */
    public function __construct($iD = null, $birthdate = null, $ageQualifier = null)
    {
        $this
            ->setID($iD)
            ->setBirthdate($birthdate)
            ->setAgeQualifier($ageQualifier);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdateType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Birthdate value
     * @return string
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
    }
    /**
     * Set Birthdate value
     * @param string $birthdate
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdateType
     */
    public function setBirthdate($birthdate = null)
    {
        // validation for constraint: string
        if (!is_null($birthdate) && !is_string($birthdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthdate)), __LINE__);
        }
        $this->Birthdate = $birthdate;
        return $this;
    }
    /**
     * Get AgeQualifier value
     * @return string|null
     */
    public function getAgeQualifier()
    {
        return $this->AgeQualifier;
    }
    /**
     * Set AgeQualifier value
     * @uses \traveltainment\SOAP17\EnumType\PersType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\PersType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ageQualifier
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdateType
     */
    public function setAgeQualifier($ageQualifier = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\PersType::valueIsValid($ageQualifier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ageQualifier, implode(', ', \traveltainment\SOAP17\EnumType\PersType::getValidValues())), __LINE__);
        }
        $this->AgeQualifier = $ageQualifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TravellerBirthdateType
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
