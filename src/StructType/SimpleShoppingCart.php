<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleShoppingCart StructType
 * @subpackage Structs
 */
class SimpleShoppingCart extends AbstractStructBase
{
    /**
     * The ShoppingCartID
     * @var string
     */
    public $ShoppingCartID;
    /**
     * The CreationDate
     * @var string
     */
    public $CreationDate;
    /**
     * The BookingList
     * @var \StructType\SimpleBookingList
     */
    public $BookingList;
    /**
     * The AddonList
     * @var \StructType\SimpleAddonList
     */
    public $AddonList;
    /**
     * Constructor method for SimpleShoppingCart
     * @uses SimpleShoppingCart::setShoppingCartID()
     * @uses SimpleShoppingCart::setCreationDate()
     * @uses SimpleShoppingCart::setBookingList()
     * @uses SimpleShoppingCart::setAddonList()
     * @param string $shoppingCartID
     * @param string $creationDate
     * @param \StructType\SimpleBookingList $bookingList
     * @param \StructType\SimpleAddonList $addonList
     */
    public function __construct($shoppingCartID = null, $creationDate = null, \StructType\SimpleBookingList $bookingList = null, \StructType\SimpleAddonList $addonList = null)
    {
        $this
            ->setShoppingCartID($shoppingCartID)
            ->setCreationDate($creationDate)
            ->setBookingList($bookingList)
            ->setAddonList($addonList);
    }
    /**
     * Get ShoppingCartID value
     * @return string|null
     */
    public function getShoppingCartID()
    {
        return $this->ShoppingCartID;
    }
    /**
     * Set ShoppingCartID value
     * @param string $shoppingCartID
     * @return \StructType\SimpleShoppingCart
     */
    public function setShoppingCartID($shoppingCartID = null)
    {
        // validation for constraint: string
        if (!is_null($shoppingCartID) && !is_string($shoppingCartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartID)), __LINE__);
        }
        $this->ShoppingCartID = $shoppingCartID;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\SimpleShoppingCart
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get BookingList value
     * @return \StructType\SimpleBookingList|null
     */
    public function getBookingList()
    {
        return $this->BookingList;
    }
    /**
     * Set BookingList value
     * @param \StructType\SimpleBookingList $bookingList
     * @return \StructType\SimpleShoppingCart
     */
    public function setBookingList(\StructType\SimpleBookingList $bookingList = null)
    {
        $this->BookingList = $bookingList;
        return $this;
    }
    /**
     * Get AddonList value
     * @return \StructType\SimpleAddonList|null
     */
    public function getAddonList()
    {
        return $this->AddonList;
    }
    /**
     * Set AddonList value
     * @param \StructType\SimpleAddonList $addonList
     * @return \StructType\SimpleShoppingCart
     */
    public function setAddonList(\StructType\SimpleAddonList $addonList = null)
    {
        $this->AddonList = $addonList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleShoppingCart
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
