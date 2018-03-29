<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalDriverType StructType
 * @subpackage Structs
 */
class CarRentalDriverType extends AbstractStructBase
{
    /**
     * The FirstName
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * @var string
     */
    public $LastName;
    /**
     * The Salutation
     * @var string
     */
    public $Salutation;
    /**
     * The Birthdate
     * @var string
     */
    public $Birthdate;
    /**
     * Constructor method for CarRentalDriverType
     * @uses CarRentalDriverType::setFirstName()
     * @uses CarRentalDriverType::setLastName()
     * @uses CarRentalDriverType::setSalutation()
     * @uses CarRentalDriverType::setBirthdate()
     * @param string $firstName
     * @param string $lastName
     * @param string $salutation
     * @param string $birthdate
     */
    public function __construct($firstName = null, $lastName = null, $salutation = null, $birthdate = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setSalutation($salutation)
            ->setBirthdate($birthdate);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\CarRentalDriverType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\CarRentalDriverType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Salutation value
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->Salutation;
    }
    /**
     * Set Salutation value
     * @param string $salutation
     * @return \StructType\CarRentalDriverType
     */
    public function setSalutation($salutation = null)
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salutation)), __LINE__);
        }
        $this->Salutation = $salutation;
        return $this;
    }
    /**
     * Get Birthdate value
     * @return string|null
     */
    public function getBirthdate()
    {
        return $this->Birthdate;
    }
    /**
     * Set Birthdate value
     * @param string $birthdate
     * @return \StructType\CarRentalDriverType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CarRentalDriverType
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
