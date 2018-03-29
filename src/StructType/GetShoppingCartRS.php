<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShoppingCartRS StructType
 * @subpackage Structs
 */
class GetShoppingCartRS extends XmlInterfaceRS
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
     * @var \StructType\BookingScList
     */
    public $BookingList;
    /**
     * The AddonList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AddonList
     */
    public $AddonList;
    /**
     * The CommentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CommentList
     */
    public $CommentList;
    /**
     * Constructor method for GetShoppingCartRS
     * @uses GetShoppingCartRS::setShoppingCartID()
     * @uses GetShoppingCartRS::setCreationDate()
     * @uses GetShoppingCartRS::setBookingList()
     * @uses GetShoppingCartRS::setAddonList()
     * @uses GetShoppingCartRS::setCommentList()
     * @param string $shoppingCartID
     * @param string $creationDate
     * @param \StructType\BookingScList $bookingList
     * @param \StructType\AddonList $addonList
     * @param \StructType\CommentList $commentList
     */
    public function __construct($shoppingCartID = null, $creationDate = null, \StructType\BookingScList $bookingList = null, \StructType\AddonList $addonList = null, \StructType\CommentList $commentList = null)
    {
        $this
            ->setShoppingCartID($shoppingCartID)
            ->setCreationDate($creationDate)
            ->setBookingList($bookingList)
            ->setAddonList($addonList)
            ->setCommentList($commentList);
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
     * @return \StructType\GetShoppingCartRS
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
     * @return \StructType\GetShoppingCartRS
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
     * @return \StructType\BookingScList|null
     */
    public function getBookingList()
    {
        return $this->BookingList;
    }
    /**
     * Set BookingList value
     * @param \StructType\BookingScList $bookingList
     * @return \StructType\GetShoppingCartRS
     */
    public function setBookingList(\StructType\BookingScList $bookingList = null)
    {
        $this->BookingList = $bookingList;
        return $this;
    }
    /**
     * Get AddonList value
     * @return \StructType\AddonList|null
     */
    public function getAddonList()
    {
        return $this->AddonList;
    }
    /**
     * Set AddonList value
     * @param \StructType\AddonList $addonList
     * @return \StructType\GetShoppingCartRS
     */
    public function setAddonList(\StructType\AddonList $addonList = null)
    {
        $this->AddonList = $addonList;
        return $this;
    }
    /**
     * Get CommentList value
     * @return \StructType\CommentList|null
     */
    public function getCommentList()
    {
        return $this->CommentList;
    }
    /**
     * Set CommentList value
     * @param \StructType\CommentList $commentList
     * @return \StructType\GetShoppingCartRS
     */
    public function setCommentList(\StructType\CommentList $commentList = null)
    {
        $this->CommentList = $commentList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShoppingCartRS
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
