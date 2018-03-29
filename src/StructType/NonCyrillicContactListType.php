<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonCyrillicContactListType StructType
 * @subpackage Structs
 */
class NonCyrillicContactListType extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet einen Kontaktdatensatz, der ueber die Attribute LocationType und TechType definiert wird.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NonCyrillicContactType[]
     */
    public $Contact;
    /**
     * Constructor method for NonCyrillicContactListType
     * @uses NonCyrillicContactListType::setContact()
     * @param \StructType\NonCyrillicContactType[] $contact
     */
    public function __construct(array $contact = array())
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return \StructType\NonCyrillicContactType[]|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param \StructType\NonCyrillicContactType[] $contact
     * @return \StructType\NonCyrillicContactListType
     */
    public function setContact(array $contact = array())
    {
        foreach ($contact as $nonCyrillicContactListTypeContactItem) {
            // validation for constraint: itemType
            if (!$nonCyrillicContactListTypeContactItem instanceof \StructType\NonCyrillicContactType) {
                throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \StructType\NonCyrillicContactType, "%s" given', is_object($nonCyrillicContactListTypeContactItem) ? get_class($nonCyrillicContactListTypeContactItem) : gettype($nonCyrillicContactListTypeContactItem)), __LINE__);
            }
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws \InvalidArgumentException
     * @param \StructType\NonCyrillicContactType $item
     * @return \StructType\NonCyrillicContactListType
     */
    public function addToContact(\StructType\NonCyrillicContactType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NonCyrillicContactType) {
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \StructType\NonCyrillicContactType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\NonCyrillicContactListType
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
