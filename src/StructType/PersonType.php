<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonType StructType
 * @subpackage Structs
 */
class PersonType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Der Knoten PersonName beinhaltet Namensangaben zu einer Person.
     * @var \traveltainment\SOAP17\StructType\PersonNameType
     */
    public $PersonName;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - documentation: Mit diesem Feld wird das Geschlecht einer Person definiert.
     * @var string
     */
    public $Gender;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - documentation: Der Knoten Contacts beinhaltet eine Liste mit unterschiedlichen Kontaktangaben.
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ContactListType
     */
    public $Contacts;
    /**
     * Constructor method for PersonType
     * @uses PersonType::setPersonName()
     * @uses PersonType::setGender()
     * @uses PersonType::setContacts()
     * @param \traveltainment\SOAP17\StructType\PersonNameType $personName
     * @param string $gender
     * @param \traveltainment\SOAP17\StructType\ContactListType $contacts
     */
    public function __construct(\traveltainment\SOAP17\StructType\PersonNameType $personName = null, $gender = null, \traveltainment\SOAP17\StructType\ContactListType $contacts = null)
    {
        $this
            ->setPersonName($personName)
            ->setGender($gender)
            ->setContacts($contacts);
    }
    /**
     * Get PersonName value
     * @return \traveltainment\SOAP17\StructType\PersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \traveltainment\SOAP17\StructType\PersonNameType $personName
     * @return \traveltainment\SOAP17\StructType\PersonType
     */
    public function setPersonName(\traveltainment\SOAP17\StructType\PersonNameType $personName = null)
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
     * @uses \traveltainment\SOAP17\EnumType\GenderType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\GenderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \traveltainment\SOAP17\StructType\PersonType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\GenderType::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \traveltainment\SOAP17\EnumType\GenderType::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \traveltainment\SOAP17\StructType\ContactListType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \traveltainment\SOAP17\StructType\ContactListType $contacts
     * @return \traveltainment\SOAP17\StructType\PersonType
     */
    public function setContacts(\traveltainment\SOAP17\StructType\ContactListType $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\PersonType
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
