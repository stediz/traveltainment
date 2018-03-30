<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressListType StructType
 * @subpackage Structs
 */
class AddressListType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\AddressType[]
     */
    public $Address;
    /**
     * Constructor method for AddressListType
     * @uses AddressListType::setAddress()
     * @param \traveltainment\SOAP17\StructType\AddressType[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \traveltainment\SOAP17\StructType\AddressType[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddressType[] $address
     * @return \traveltainment\SOAP17\StructType\AddressListType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $addressListTypeAddressItem) {
            // validation for constraint: itemType
            if (!$addressListTypeAddressItem instanceof \traveltainment\SOAP17\StructType\AddressType) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \traveltainment\SOAP17\StructType\AddressType, "%s" given', is_object($addressListTypeAddressItem) ? get_class($addressListTypeAddressItem) : gettype($addressListTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\AddressType $item
     * @return \traveltainment\SOAP17\StructType\AddressListType
     */
    public function addToAddress(\traveltainment\SOAP17\StructType\AddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\AddressType) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \traveltainment\SOAP17\StructType\AddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddressListType
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
