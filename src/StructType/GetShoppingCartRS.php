<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\BookingScList
     */
    public $BookingList;
    /**
     * The AddonList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AddonList
     */
    public $AddonList;
    /**
     * The CommentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CommentList
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
     * @param \traveltainment\SOAP17\StructType\BookingScList $bookingList
     * @param \traveltainment\SOAP17\StructType\AddonList $addonList
     * @param \traveltainment\SOAP17\StructType\CommentList $commentList
     */
    public function __construct($shoppingCartID = null, $creationDate = null, \traveltainment\SOAP17\StructType\BookingScList $bookingList = null, \traveltainment\SOAP17\StructType\AddonList $addonList = null, \traveltainment\SOAP17\StructType\CommentList $commentList = null)
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
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
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
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
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
     * @return \traveltainment\SOAP17\StructType\BookingScList|null
     */
    public function getBookingList()
    {
        return $this->BookingList;
    }
    /**
     * Set BookingList value
     * @param \traveltainment\SOAP17\StructType\BookingScList $bookingList
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
     */
    public function setBookingList(\traveltainment\SOAP17\StructType\BookingScList $bookingList = null)
    {
        $this->BookingList = $bookingList;
        return $this;
    }
    /**
     * Get AddonList value
     * @return \traveltainment\SOAP17\StructType\AddonList|null
     */
    public function getAddonList()
    {
        return $this->AddonList;
    }
    /**
     * Set AddonList value
     * @param \traveltainment\SOAP17\StructType\AddonList $addonList
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
     */
    public function setAddonList(\traveltainment\SOAP17\StructType\AddonList $addonList = null)
    {
        $this->AddonList = $addonList;
        return $this;
    }
    /**
     * Get CommentList value
     * @return \traveltainment\SOAP17\StructType\CommentList|null
     */
    public function getCommentList()
    {
        return $this->CommentList;
    }
    /**
     * Set CommentList value
     * @param \traveltainment\SOAP17\StructType\CommentList $commentList
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
     */
    public function setCommentList(\traveltainment\SOAP17\StructType\CommentList $commentList = null)
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
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRS
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
