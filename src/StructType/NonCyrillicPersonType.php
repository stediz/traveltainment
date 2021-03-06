<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonCyrillicPersonType StructType
 * @subpackage Structs
 */
class NonCyrillicPersonType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Der Knoten PersonName beinhaltet Namensangaben zu einer Person.
     * @var \StructType\NonCyrillicPersonNameType
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
     * @var \StructType\NonCyrillicContactListType
     */
    public $Contacts;
    /**
     * Constructor method for NonCyrillicPersonType
     * @uses NonCyrillicPersonType::setPersonName()
     * @uses NonCyrillicPersonType::setGender()
     * @uses NonCyrillicPersonType::setContacts()
     * @param \StructType\NonCyrillicPersonNameType $personName
     * @param string $gender
     * @param \StructType\NonCyrillicContactListType $contacts
     */
    public function __construct(\StructType\NonCyrillicPersonNameType $personName = null, $gender = null, \StructType\NonCyrillicContactListType $contacts = null)
    {
        $this
            ->setPersonName($personName)
            ->setGender($gender)
            ->setContacts($contacts);
    }
    /**
     * Get PersonName value
     * @return \StructType\NonCyrillicPersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \StructType\NonCyrillicPersonNameType $personName
     * @return \StructType\NonCyrillicPersonType
     */
    public function setPersonName(\StructType\NonCyrillicPersonNameType $personName = null)
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
     * @return \StructType\NonCyrillicPersonType
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
     * Get Contacts value
     * @return \StructType\NonCyrillicContactListType|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \StructType\NonCyrillicContactListType $contacts
     * @return \StructType\NonCyrillicPersonType
     */
    public function setContacts(\StructType\NonCyrillicContactListType $contacts = null)
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
     * @return \StructType\NonCyrillicPersonType
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
