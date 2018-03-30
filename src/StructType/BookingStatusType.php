<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingStatusType StructType
 * @subpackage Structs
 */
class BookingStatusType extends AbstractStructBase
{
    /**
     * The StatusType
     * @var string
     */
    public $StatusType;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The NotBookedReasonType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NotBookedReasonType;
    /**
     * Constructor method for BookingStatusType
     * @uses BookingStatusType::setStatusType()
     * @uses BookingStatusType::setType()
     * @uses BookingStatusType::setNotBookedReasonType()
     * @param string $statusType
     * @param string $type
     * @param string $notBookedReasonType
     */
    public function __construct($statusType = null, $type = null, $notBookedReasonType = null)
    {
        $this
            ->setStatusType($statusType)
            ->setType($type)
            ->setNotBookedReasonType($notBookedReasonType);
    }
    /**
     * Get StatusType value
     * @return string|null
     */
    public function getStatusType()
    {
        return $this->StatusType;
    }
    /**
     * Set StatusType value
     * @uses \traveltainment\SOAP17\EnumType\BookingStatusTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\BookingStatusTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusType
     * @return \traveltainment\SOAP17\StructType\BookingStatusType
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\BookingStatusTypeEnum::valueIsValid($statusType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statusType, implode(', ', \traveltainment\SOAP17\EnumType\BookingStatusTypeEnum::getValidValues())), __LINE__);
        }
        $this->StatusType = $statusType;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \traveltainment\SOAP17\StructType\BookingStatusType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\BookingTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \traveltainment\SOAP17\EnumType\BookingTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @uses \traveltainment\SOAP17\EnumType\NotBookedStatusDefinitionType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\NotBookedStatusDefinitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notBookedReasonType
     * @return \traveltainment\SOAP17\StructType\BookingStatusType
     */
    public function setNotBookedReasonType($notBookedReasonType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\NotBookedStatusDefinitionType::valueIsValid($notBookedReasonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notBookedReasonType, implode(', ', \traveltainment\SOAP17\EnumType\NotBookedStatusDefinitionType::getValidValues())), __LINE__);
        }
        $this->NotBookedReasonType = $notBookedReasonType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookingStatusType
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
