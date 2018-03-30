<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkingOfferSummaryType StructType
 * @subpackage Structs
 */
class ParkingOfferSummaryType extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Description
     * @var \traveltainment\SOAP17\StructType\DescriptionType
     */
    public $Description;
    /**
     * The OfferCost
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $OfferCost;
    /**
     * Constructor method for ParkingOfferSummaryType
     * @uses ParkingOfferSummaryType::setOfferID()
     * @uses ParkingOfferSummaryType::setDescription()
     * @uses ParkingOfferSummaryType::setOfferCost()
     * @param string $offerID
     * @param \traveltainment\SOAP17\StructType\DescriptionType $description
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     */
    public function __construct($offerID = null, \traveltainment\SOAP17\StructType\DescriptionType $description = null, \traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null)
    {
        $this
            ->setOfferID($offerID)
            ->setDescription($description)
            ->setOfferCost($offerCost);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \traveltainment\SOAP17\StructType\ParkingOfferSummaryType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get Description value
     * @return \traveltainment\SOAP17\StructType\DescriptionType|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \traveltainment\SOAP17\StructType\DescriptionType $description
     * @return \traveltainment\SOAP17\StructType\ParkingOfferSummaryType
     */
    public function setDescription(\traveltainment\SOAP17\StructType\DescriptionType $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get OfferCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getOfferCost()
    {
        return $this->OfferCost;
    }
    /**
     * Set OfferCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     * @return \traveltainment\SOAP17\StructType\ParkingOfferSummaryType
     */
    public function setOfferCost(\traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null)
    {
        $this->OfferCost = $offerCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ParkingOfferSummaryType
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
