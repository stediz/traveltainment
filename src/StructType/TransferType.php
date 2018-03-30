<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferType StructType
 * @subpackage Structs
 */
class TransferType extends AbstractStructBase
{
    /**
     * The TransferInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TransferInfo;
    /**
     * The TransferMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TransferMinutes;
    /**
     * The ShuttleService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ShuttleServiceType
     */
    public $ShuttleService;
    /**
     * The TransferChildSeatInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TransferChildSeatInfo;
    /**
     * Constructor method for TransferType
     * @uses TransferType::setTransferInfo()
     * @uses TransferType::setTransferMinutes()
     * @uses TransferType::setShuttleService()
     * @uses TransferType::setTransferChildSeatInfo()
     * @param string $transferInfo
     * @param int $transferMinutes
     * @param \traveltainment\SOAP17\StructType\ShuttleServiceType $shuttleService
     * @param string $transferChildSeatInfo
     */
    public function __construct($transferInfo = null, $transferMinutes = null, \traveltainment\SOAP17\StructType\ShuttleServiceType $shuttleService = null, $transferChildSeatInfo = null)
    {
        $this
            ->setTransferInfo($transferInfo)
            ->setTransferMinutes($transferMinutes)
            ->setShuttleService($shuttleService)
            ->setTransferChildSeatInfo($transferChildSeatInfo);
    }
    /**
     * Get TransferInfo value
     * @return string|null
     */
    public function getTransferInfo()
    {
        return $this->TransferInfo;
    }
    /**
     * Set TransferInfo value
     * @param string $transferInfo
     * @return \traveltainment\SOAP17\StructType\TransferType
     */
    public function setTransferInfo($transferInfo = null)
    {
        // validation for constraint: string
        if (!is_null($transferInfo) && !is_string($transferInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferInfo)), __LINE__);
        }
        $this->TransferInfo = $transferInfo;
        return $this;
    }
    /**
     * Get TransferMinutes value
     * @return int|null
     */
    public function getTransferMinutes()
    {
        return $this->TransferMinutes;
    }
    /**
     * Set TransferMinutes value
     * @param int $transferMinutes
     * @return \traveltainment\SOAP17\StructType\TransferType
     */
    public function setTransferMinutes($transferMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($transferMinutes) && !is_numeric($transferMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transferMinutes)), __LINE__);
        }
        $this->TransferMinutes = $transferMinutes;
        return $this;
    }
    /**
     * Get ShuttleService value
     * @return \traveltainment\SOAP17\StructType\ShuttleServiceType|null
     */
    public function getShuttleService()
    {
        return $this->ShuttleService;
    }
    /**
     * Set ShuttleService value
     * @param \traveltainment\SOAP17\StructType\ShuttleServiceType $shuttleService
     * @return \traveltainment\SOAP17\StructType\TransferType
     */
    public function setShuttleService(\traveltainment\SOAP17\StructType\ShuttleServiceType $shuttleService = null)
    {
        $this->ShuttleService = $shuttleService;
        return $this;
    }
    /**
     * Get TransferChildSeatInfo value
     * @return string|null
     */
    public function getTransferChildSeatInfo()
    {
        return $this->TransferChildSeatInfo;
    }
    /**
     * Set TransferChildSeatInfo value
     * @param string $transferChildSeatInfo
     * @return \traveltainment\SOAP17\StructType\TransferType
     */
    public function setTransferChildSeatInfo($transferChildSeatInfo = null)
    {
        // validation for constraint: string
        if (!is_null($transferChildSeatInfo) && !is_string($transferChildSeatInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferChildSeatInfo)), __LINE__);
        }
        $this->TransferChildSeatInfo = $transferChildSeatInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TransferType
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
