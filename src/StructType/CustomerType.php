<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerType StructType
 * @subpackage Structs
 */
class CustomerType extends PersonType
{
    /**
     * The PersonName
     * @var \StructType\PersonNameType
     */
    public $PersonName;
    /**
     * The Gender
     * @var string
     */
    public $Gender;
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\-(([0-2][0-9])|([3][01]))(\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?
     * @var string
     */
    public $BirthDate;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ContactsType
     */
    public $Contacts;
    /**
     * The Addresses
     * @var \StructType\AddressListType
     */
    public $Addresses;
    /**
     * The CompliedWithBookingOnRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CompliedWithBookingOnRequest;
    /**
     * Constructor method for CustomerType
     * @uses CustomerType::setPersonName()
     * @uses CustomerType::setGender()
     * @uses CustomerType::setBirthDate()
     * @uses CustomerType::setContacts()
     * @uses CustomerType::setAddresses()
     * @uses CustomerType::setCompliedWithBookingOnRequest()
     * @param \StructType\PersonNameType $personName
     * @param string $gender
     * @param string $birthDate
     * @param \StructType\ContactsType $contacts
     * @param \StructType\AddressListType $addresses
     * @param bool $compliedWithBookingOnRequest
     */
    public function __construct(\StructType\PersonNameType $personName = null, $gender = null, $birthDate = null, \StructType\ContactsType $contacts = null, \StructType\AddressListType $addresses = null, $compliedWithBookingOnRequest = null)
    {
        $this
            ->setPersonName($personName)
            ->setGender($gender)
            ->setBirthDate($birthDate)
            ->setContacts($contacts)
            ->setAddresses($addresses)
            ->setCompliedWithBookingOnRequest($compliedWithBookingOnRequest);
    }
    /**
     * Get PersonName value
     * @return \StructType\PersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \StructType\PersonNameType $personName
     * @return \StructType\CustomerType
     */
    public function setPersonName(\StructType\PersonNameType $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @uses \EnumType\GenderType::valueIsValid()
     * @uses \EnumType\GenderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \StructType\CustomerType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GenderType::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \EnumType\GenderType::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \StructType\CustomerType
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: pattern
        if (is_scalar($birthDate) && !preg_match('/[1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\\-(([0-2][0-9])|([3][01]))(\\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?/', $birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[1-9][0-9]{3}-(([0][1-9])|([1][0-2]))\-(([0-2][0-9])|([3][01]))(\+(([01][0-9])|(2[0-3])):([0-5][0-9]))?", "%s" given', var_export($birthDate, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->BirthDate = $birthDate;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \StructType\ContactsType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \StructType\ContactsType $contacts
     * @return \StructType\CustomerType
     */
    public function setContacts(\StructType\ContactsType $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get Addresses value
     * @return \StructType\AddressListType|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \StructType\AddressListType $addresses
     * @return \StructType\CustomerType
     */
    public function setAddresses(\StructType\AddressListType $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get CompliedWithBookingOnRequest value
     * @return bool|null
     */
    public function getCompliedWithBookingOnRequest()
    {
        return $this->CompliedWithBookingOnRequest;
    }
    /**
     * Set CompliedWithBookingOnRequest value
     * @param bool $compliedWithBookingOnRequest
     * @return \StructType\CustomerType
     */
    public function setCompliedWithBookingOnRequest($compliedWithBookingOnRequest = null)
    {
        // validation for constraint: boolean
        if (!is_null($compliedWithBookingOnRequest) && !is_bool($compliedWithBookingOnRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($compliedWithBookingOnRequest)), __LINE__);
        }
        $this->CompliedWithBookingOnRequest = $compliedWithBookingOnRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomerType
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
