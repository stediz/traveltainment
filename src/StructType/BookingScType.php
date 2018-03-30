<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\OfferScType
     */
    public $Offer;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CommentList
     */
    public $Comments;
    /**
     * Constructor method for BookingScType
     * @uses BookingScType::setOffer()
     * @uses BookingScType::setComments()
     * @param \traveltainment\SOAP17\StructType\OfferScType $offer
     * @param \traveltainment\SOAP17\StructType\CommentList $comments
     */
    public function __construct(\traveltainment\SOAP17\StructType\OfferScType $offer = null, \traveltainment\SOAP17\StructType\CommentList $comments = null)
    {
        $this
            ->setOffer($offer)
            ->setComments($comments);
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\OfferScType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\OfferScType $offer
     * @return \traveltainment\SOAP17\StructType\BookingScType
     */
    public function setOffer(\traveltainment\SOAP17\StructType\OfferScType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Comments value
     * @return \traveltainment\SOAP17\StructType\CommentList|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \traveltainment\SOAP17\StructType\CommentList $comments
     * @return \traveltainment\SOAP17\StructType\BookingScType
     */
    public function setComments(\traveltainment\SOAP17\StructType\CommentList $comments = null)
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
     * @return \traveltainment\SOAP17\StructType\BookingScType
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
