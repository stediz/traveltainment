<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingScType StructType
 * @subpackage Structs
 */
class BookingScType extends BookingScBaseType
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfferScType
     */
    public $Offer;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CommentList
     */
    public $Comments;
    /**
     * Constructor method for BookingScType
     * @uses BookingScType::setOffer()
     * @uses BookingScType::setComments()
     * @param \StructType\OfferScType $offer
     * @param \StructType\CommentList $comments
     */
    public function __construct(\StructType\OfferScType $offer = null, \StructType\CommentList $comments = null)
    {
        $this
            ->setOffer($offer)
            ->setComments($comments);
    }
    /**
     * Get Offer value
     * @return \StructType\OfferScType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\OfferScType $offer
     * @return \StructType\BookingScType
     */
    public function setOffer(\StructType\OfferScType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Comments value
     * @return \StructType\CommentList|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \StructType\CommentList $comments
     * @return \StructType\BookingScType
     */
    public function setComments(\StructType\CommentList $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookingScType
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
