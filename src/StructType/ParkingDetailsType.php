<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingDetailsType StructType
 * @subpackage Structs
 */
class ParkingDetailsType extends AbstractStructBase
{
    /**
     * The CarParkByProviderGeoPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GeoPointType
     */
    public $CarParkByProviderGeoPoint;
    /**
     * The CarParkName
     * @var string
     */
    public $CarParkName;
    /**
     * The Directions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Directions;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The MaxCarSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MaxCarSize;
    /**
     * The Procedures
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ProceduresType
     */
    public $Procedures;
    /**
     * The Transfer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TransferType
     */
    public $Transfer;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The UsageHints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UsageHints;
    /**
     * The OperatorHints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperatorHints;
    /**
     * The Security
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Security;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Insurance;
    /**
     * The AddInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AddInfosType
     */
    public $AddInfos;
    /**
     * Constructor method for ParkingDetailsType
     * @uses ParkingDetailsType::setCarParkByProviderGeoPoint()
     * @uses ParkingDetailsType::setCarParkName()
     * @uses ParkingDetailsType::setDirections()
     * @uses ParkingDetailsType::setAddress()
     * @uses ParkingDetailsType::setPhoneNumber()
     * @uses ParkingDetailsType::setMaxCarSize()
     * @uses ParkingDetailsType::setProcedures()
     * @uses ParkingDetailsType::setTransfer()
     * @uses ParkingDetailsType::setAccessibility()
     * @uses ParkingDetailsType::setUsageHints()
     * @uses ParkingDetailsType::setOperatorHints()
     * @uses ParkingDetailsType::setSecurity()
     * @uses ParkingDetailsType::setInsurance()
     * @uses ParkingDetailsType::setAddInfos()
     * @param \StructType\GeoPointType $carParkByProviderGeoPoint
     * @param string $carParkName
     * @param string $directions
     * @param string $address
     * @param string $phoneNumber
     * @param string $maxCarSize
     * @param \StructType\ProceduresType $procedures
     * @param \StructType\TransferType $transfer
     * @param string $accessibility
     * @param string $usageHints
     * @param string $operatorHints
     * @param string $security
     * @param string $insurance
     * @param \StructType\AddInfosType $addInfos
     */
    public function __construct(\StructType\GeoPointType $carParkByProviderGeoPoint = null, $carParkName = null, $directions = null, $address = null, $phoneNumber = null, $maxCarSize = null, \StructType\ProceduresType $procedures = null, \StructType\TransferType $transfer = null, $accessibility = null, $usageHints = null, $operatorHints = null, $security = null, $insurance = null, \StructType\AddInfosType $addInfos = null)
    {
        $this
            ->setCarParkByProviderGeoPoint($carParkByProviderGeoPoint)
            ->setCarParkName($carParkName)
            ->setDirections($directions)
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setMaxCarSize($maxCarSize)
            ->setProcedures($procedures)
            ->setTransfer($transfer)
            ->setAccessibility($accessibility)
            ->setUsageHints($usageHints)
            ->setOperatorHints($operatorHints)
            ->setSecurity($security)
            ->setInsurance($insurance)
            ->setAddInfos($addInfos);
    }
    /**
     * Get CarParkByProviderGeoPoint value
     * @return \StructType\GeoPointType|null
     */
    public function getCarParkByProviderGeoPoint()
    {
        return $this->CarParkByProviderGeoPoint;
    }
    /**
     * Set CarParkByProviderGeoPoint value
     * @param \StructType\GeoPointType $carParkByProviderGeoPoint
     * @return \StructType\ParkingDetailsType
     */
    public function setCarParkByProviderGeoPoint(\StructType\GeoPointType $carParkByProviderGeoPoint = null)
    {
        $this->CarParkByProviderGeoPoint = $carParkByProviderGeoPoint;
        return $this;
    }
    /**
     * Get CarParkName value
     * @return string|null
     */
    public function getCarParkName()
    {
        return $this->CarParkName;
    }
    /**
     * Set CarParkName value
     * @param string $carParkName
     * @return \StructType\ParkingDetailsType
     */
    public function setCarParkName($carParkName = null)
    {
        // validation for constraint: string
        if (!is_null($carParkName) && !is_string($carParkName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carParkName)), __LINE__);
        }
        $this->CarParkName = $carParkName;
        return $this;
    }
    /**
     * Get Directions value
     * @return string|null
     */
    public function getDirections()
    {
        return $this->Directions;
    }
    /**
     * Set Directions value
     * @param string $directions
     * @return \StructType\ParkingDetailsType
     */
    public function setDirections($directions = null)
    {
        // validation for constraint: string
        if (!is_null($directions) && !is_string($directions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directions)), __LINE__);
        }
        $this->Directions = $directions;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \StructType\ParkingDetailsType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \StructType\ParkingDetailsType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get MaxCarSize value
     * @return string|null
     */
    public function getMaxCarSize()
    {
        return $this->MaxCarSize;
    }
    /**
     * Set MaxCarSize value
     * @param string $maxCarSize
     * @return \StructType\ParkingDetailsType
     */
    public function setMaxCarSize($maxCarSize = null)
    {
        // validation for constraint: string
        if (!is_null($maxCarSize) && !is_string($maxCarSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCarSize)), __LINE__);
        }
        $this->MaxCarSize = $maxCarSize;
        return $this;
    }
    /**
     * Get Procedures value
     * @return \StructType\ProceduresType|null
     */
    public function getProcedures()
    {
        return $this->Procedures;
    }
    /**
     * Set Procedures value
     * @param \StructType\ProceduresType $procedures
     * @return \StructType\ParkingDetailsType
     */
    public function setProcedures(\StructType\ProceduresType $procedures = null)
    {
        $this->Procedures = $procedures;
        return $this;
    }
    /**
     * Get Transfer value
     * @return \StructType\TransferType|null
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }
    /**
     * Set Transfer value
     * @param \StructType\TransferType $transfer
     * @return \StructType\ParkingDetailsType
     */
    public function setTransfer(\StructType\TransferType $transfer = null)
    {
        $this->Transfer = $transfer;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @param string $accessibility
     * @return \StructType\ParkingDetailsType
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: string
        if (!is_null($accessibility) && !is_string($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessibility)), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get UsageHints value
     * @return string|null
     */
    public function getUsageHints()
    {
        return $this->UsageHints;
    }
    /**
     * Set UsageHints value
     * @param string $usageHints
     * @return \StructType\ParkingDetailsType
     */
    public function setUsageHints($usageHints = null)
    {
        // validation for constraint: string
        if (!is_null($usageHints) && !is_string($usageHints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usageHints)), __LINE__);
        }
        $this->UsageHints = $usageHints;
        return $this;
    }
    /**
     * Get OperatorHints value
     * @return string|null
     */
    public function getOperatorHints()
    {
        return $this->OperatorHints;
    }
    /**
     * Set OperatorHints value
     * @param string $operatorHints
     * @return \StructType\ParkingDetailsType
     */
    public function setOperatorHints($operatorHints = null)
    {
        // validation for constraint: string
        if (!is_null($operatorHints) && !is_string($operatorHints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatorHints)), __LINE__);
        }
        $this->OperatorHints = $operatorHints;
        return $this;
    }
    /**
     * Get Security value
     * @return string|null
     */
    public function getSecurity()
    {
        return $this->Security;
    }
    /**
     * Set Security value
     * @param string $security
     * @return \StructType\ParkingDetailsType
     */
    public function setSecurity($security = null)
    {
        // validation for constraint: string
        if (!is_null($security) && !is_string($security)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($security)), __LINE__);
        }
        $this->Security = $security;
        return $this;
    }
    /**
     * Get Insurance value
     * @return string|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param string $insurance
     * @return \StructType\ParkingDetailsType
     */
    public function setInsurance($insurance = null)
    {
        // validation for constraint: string
        if (!is_null($insurance) && !is_string($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insurance)), __LINE__);
        }
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get AddInfos value
     * @return \StructType\AddInfosType|null
     */
    public function getAddInfos()
    {
        return $this->AddInfos;
    }
    /**
     * Set AddInfos value
     * @param \StructType\AddInfosType $addInfos
     * @return \StructType\ParkingDetailsType
     */
    public function setAddInfos(\StructType\AddInfosType $addInfos = null)
    {
        $this->AddInfos = $addInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingDetailsType
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
