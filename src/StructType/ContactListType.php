<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactListType StructType
 * @subpackage Structs
 */
class ContactListType extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet einen Kontaktdatensatz, der ueber die Attribute LocationType und TechType definiert wird.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ContactType[]
     */
    public $Contact;
    /**
     * Constructor method for ContactListType
     * @uses ContactListType::setContact()
     * @param \traveltainment\SOAP17\StructType\ContactType[] $contact
     */
    public function __construct(array $contact = array())
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return \traveltainment\SOAP17\StructType\ContactType[]|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ContactType[] $contact
     * @return \traveltainment\SOAP17\StructType\ContactListType
     */
    public function setContact(array $contact = array())
    {
        foreach ($contact as $contactListTypeContactItem) {
            // validation for constraint: itemType
            if (!$contactListTypeContactItem instanceof \traveltainment\SOAP17\StructType\ContactType) {
                throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \traveltainment\SOAP17\StructType\ContactType, "%s" given', is_object($contactListTypeContactItem) ? get_class($contactListTypeContactItem) : gettype($contactListTypeContactItem)), __LINE__);
            }
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\ContactType $item
     * @return \traveltainment\SOAP17\StructType\ContactListType
     */
    public function addToContact(\traveltainment\SOAP17\StructType\ContactType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\ContactType) {
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \traveltainment\SOAP17\StructType\ContactType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\ContactListType
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
