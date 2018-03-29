<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingOfferDescriptionType StructType
 * @subpackage Structs
 */
class ParkingOfferDescriptionType extends AbstractStructBase
{
    /**
     * The CarParkName
     * @var string
     */
    public $CarParkName;
    /**
     * The TransferMinutes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TransferMinutes;
    /**
     * The IsRefundable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRefundable;
    /**
     * The TermsAndConditionsURL
     * @var string
     */
    public $TermsAndConditionsURL;
    /**
     * The Images
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ImagesType
     */
    public $Images;
    /**
     * Constructor method for ParkingOfferDescriptionType
     * @uses ParkingOfferDescriptionType::setCarParkName()
     * @uses ParkingOfferDescriptionType::setTransferMinutes()
     * @uses ParkingOfferDescriptionType::setIsRefundable()
     * @uses ParkingOfferDescriptionType::setTermsAndConditionsURL()
     * @uses ParkingOfferDescriptionType::setImages()
     * @param string $carParkName
     * @param int $transferMinutes
     * @param bool $isRefundable
     * @param string $termsAndConditionsURL
     * @param \StructType\ImagesType $images
     */
    public function __construct($carParkName = null, $transferMinutes = null, $isRefundable = null, $termsAndConditionsURL = null, \StructType\ImagesType $images = null)
    {
        $this
            ->setCarParkName($carParkName)
            ->setTransferMinutes($transferMinutes)
            ->setIsRefundable($isRefundable)
            ->setTermsAndConditionsURL($termsAndConditionsURL)
            ->setImages($images);
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
     * @return \StructType\ParkingOfferDescriptionType
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
     * @return \StructType\ParkingOfferDescriptionType
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
     * Get IsRefundable value
     * @return bool|null
     */
    public function getIsRefundable()
    {
        return $this->IsRefundable;
    }
    /**
     * Set IsRefundable value
     * @param bool $isRefundable
     * @return \StructType\ParkingOfferDescriptionType
     */
    public function setIsRefundable($isRefundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRefundable) && !is_bool($isRefundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRefundable)), __LINE__);
        }
        $this->IsRefundable = $isRefundable;
        return $this;
    }
    /**
     * Get TermsAndConditionsURL value
     * @return string|null
     */
    public function getTermsAndConditionsURL()
    {
        return $this->TermsAndConditionsURL;
    }
    /**
     * Set TermsAndConditionsURL value
     * @param string $termsAndConditionsURL
     * @return \StructType\ParkingOfferDescriptionType
     */
    public function setTermsAndConditionsURL($termsAndConditionsURL = null)
    {
        // validation for constraint: string
        if (!is_null($termsAndConditionsURL) && !is_string($termsAndConditionsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($termsAndConditionsURL)), __LINE__);
        }
        $this->TermsAndConditionsURL = $termsAndConditionsURL;
        return $this;
    }
    /**
     * Get Images value
     * @return \StructType\ImagesType|null
     */
    public function getImages()
    {
        return $this->Images;
    }
    /**
     * Set Images value
     * @param \StructType\ImagesType $images
     * @return \StructType\ParkingOfferDescriptionType
     */
    public function setImages(\StructType\ImagesType $images = null)
    {
        $this->Images = $images;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParkingOfferDescriptionType
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
