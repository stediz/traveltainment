<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBookingStatusToNotBookedRQ StructType
 * @subpackage Structs
 */
class SetBookingStatusToNotBookedRQ extends XmlInterfaceRQ
{
    /**
     * The BookingID
     * @var string
     */
    public $BookingID;
    /**
     * The NotBookedReasonType
     * @var string
     */
    public $NotBookedReasonType;
    /**
     * The Comment
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for SetBookingStatusToNotBookedRQ
     * @uses SetBookingStatusToNotBookedRQ::setBookingID()
     * @uses SetBookingStatusToNotBookedRQ::setNotBookedReasonType()
     * @uses SetBookingStatusToNotBookedRQ::setComment()
     * @param string $bookingID
     * @param string $notBookedReasonType
     * @param string $comment
     */
    public function __construct($bookingID = null, $notBookedReasonType = null, $comment = null)
    {
        $this
            ->setBookingID($bookingID)
            ->setNotBookedReasonType($notBookedReasonType)
            ->setComment($comment);
    }
    /**
     * Get BookingID value
     * @return string|null
     */
    public function getBookingID()
    {
        return $this->BookingID;
    }
    /**
     * Set BookingID value
     * @param string $bookingID
     * @return \StructType\SetBookingStatusToNotBookedRQ
     */
    public function setBookingID($bookingID = null)
    {
        // validation for constraint: string
        if (!is_null($bookingID) && !is_string($bookingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingID)), __LINE__);
        }
        $this->BookingID = $bookingID;
        return $this;
    }
    /**
     * Get NotBookedReasonType value
     * @return string|null
     */
    public function getNotBookedReasonType()
    {
        return $this->NotBookedReasonType;
    }
    /**
     * Set NotBookedReasonType value
     * @uses \EnumType\NotBookedStatusDefinitionType::valueIsValid()
     * @uses \EnumType\NotBookedStatusDefinitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notBookedReasonType
     * @return \StructType\SetBookingStatusToNotBookedRQ
     */
    public function setNotBookedReasonType($notBookedReasonType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotBookedStatusDefinitionType::valueIsValid($notBookedReasonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notBookedReasonType, implode(', ', \EnumType\NotBookedStatusDefinitionType::getValidValues())), __LINE__);
        }
        $this->NotBookedReasonType = $notBookedReasonType;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @uses \EnumType\CommentType::valueIsValid()
     * @uses \EnumType\CommentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $comment
     * @return \StructType\SetBookingStatusToNotBookedRQ
     */
    public function setComment($comment = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CommentType::valueIsValid($comment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $comment, implode(', ', \EnumType\CommentType::getValidValues())), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SetBookingStatusToNotBookedRQ
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
