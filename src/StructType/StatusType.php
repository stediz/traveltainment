<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Dieser Knoten enthaelt Informationen zum Status der Vakanzpruefung.
 * @subpackage Structs
 */
class StatusType extends AbstractStructBase
{
    /**
     * The StatusType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusType;
    /**
     * The StatusNo
     * @var int
     */
    public $StatusNo;
    /**
     * The StatusNoText
     * @var string
     */
    public $StatusNoText;
    /**
     * The StatusText
     * @var string
     */
    public $StatusText;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for StatusType
     * @uses StatusType::setStatusType()
     * @uses StatusType::setStatusNo()
     * @uses StatusType::setStatusNoText()
     * @uses StatusType::setStatusText()
     * @uses StatusType::setStatus()
     * @param string $statusType
     * @param int $statusNo
     * @param string $statusNoText
     * @param string $statusText
     * @param string $status
     */
    public function __construct($statusType = null, $statusNo = null, $statusNoText = null, $statusText = null, $status = null)
    {
        $this
            ->setStatusType($statusType)
            ->setStatusNo($statusNo)
            ->setStatusNoText($statusNoText)
            ->setStatusText($statusText)
            ->setStatus($status);
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
     * @uses \EnumType\BookingStatusTypeEnum::valueIsValid()
     * @uses \EnumType\BookingStatusTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusType
     * @return \StructType\StatusType
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BookingStatusTypeEnum::valueIsValid($statusType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statusType, implode(', ', \EnumType\BookingStatusTypeEnum::getValidValues())), __LINE__);
        }
        $this->StatusType = $statusType;
        return $this;
    }
    /**
     * Get StatusNo value
     * @return int|null
     */
    public function getStatusNo()
    {
        return $this->StatusNo;
    }
    /**
     * Set StatusNo value
     * @param int $statusNo
     * @return \StructType\StatusType
     */
    public function setStatusNo($statusNo = null)
    {
        // validation for constraint: int
        if (!is_null($statusNo) && !is_numeric($statusNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusNo)), __LINE__);
        }
        $this->StatusNo = $statusNo;
        return $this;
    }
    /**
     * Get StatusNoText value
     * @return string|null
     */
    public function getStatusNoText()
    {
        return $this->StatusNoText;
    }
    /**
     * Set StatusNoText value
     * @param string $statusNoText
     * @return \StructType\StatusType
     */
    public function setStatusNoText($statusNoText = null)
    {
        // validation for constraint: string
        if (!is_null($statusNoText) && !is_string($statusNoText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusNoText)), __LINE__);
        }
        $this->StatusNoText = $statusNoText;
        return $this;
    }
    /**
     * Get StatusText value
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->StatusText;
    }
    /**
     * Set StatusText value
     * @param string $statusText
     * @return \StructType\StatusType
     */
    public function setStatusText($statusText = null)
    {
        // validation for constraint: string
        if (!is_null($statusText) && !is_string($statusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusText)), __LINE__);
        }
        $this->StatusText = $statusText;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\StatusEnum::valueIsValid()
     * @uses \EnumType\StatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\StatusType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\StatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StatusType
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
