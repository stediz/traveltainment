<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsType StructType
 * @subpackage Structs
 */
class ContactsType extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ContactType[]
     */
    public $Contact;
    /**
     * Constructor method for ContactsType
     * @uses ContactsType::setContact()
     * @param \StructType\ContactType[] $contact
     */
    public function __construct(array $contact = array())
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return \StructType\ContactType[]|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param \StructType\ContactType[] $contact
     * @return \StructType\ContactsType
     */
    public function setContact(array $contact = array())
    {
        foreach ($contact as $contactsTypeContactItem) {
            // validation for constraint: itemType
            if (!$contactsTypeContactItem instanceof \StructType\ContactType) {
                throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \StructType\ContactType, "%s" given', is_object($contactsTypeContactItem) ? get_class($contactsTypeContactItem) : gettype($contactsTypeContactItem)), __LINE__);
            }
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws \InvalidArgumentException
     * @param \StructType\ContactType $item
     * @return \StructType\ContactsType
     */
    public function addToContact(\StructType\ContactType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ContactType) {
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \StructType\ContactType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Contact[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ContactsType
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
