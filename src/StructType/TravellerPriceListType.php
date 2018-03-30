<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravellerPriceListType StructType
 * @subpackage Structs
 */
class TravellerPriceListType extends AbstractStructBase
{
    /**
     * The TravellerPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravellerPriceType[]
     */
    public $TravellerPrice;
    /**
     * Constructor method for TravellerPriceListType
     * @uses TravellerPriceListType::setTravellerPrice()
     * @param \traveltainment\SOAP17\StructType\TravellerPriceType[] $travellerPrice
     */
    public function __construct(array $travellerPrice = array())
    {
        $this
            ->setTravellerPrice($travellerPrice);
    }
    /**
     * Get TravellerPrice value
     * @return \traveltainment\SOAP17\StructType\TravellerPriceType[]|null
     */
    public function getTravellerPrice()
    {
        return $this->TravellerPrice;
    }
    /**
     * Set TravellerPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TravellerPriceType[] $travellerPrice
     * @return \traveltainment\SOAP17\StructType\TravellerPriceListType
     */
    public function setTravellerPrice(array $travellerPrice = array())
    {
        foreach ($travellerPrice as $travellerPriceListTypeTravellerPriceItem) {
            // validation for constraint: itemType
            if (!$travellerPriceListTypeTravellerPriceItem instanceof \traveltainment\SOAP17\StructType\TravellerPriceType) {
                throw new \InvalidArgumentException(sprintf('The TravellerPrice property can only contain items of \traveltainment\SOAP17\StructType\TravellerPriceType, "%s" given', is_object($travellerPriceListTypeTravellerPriceItem) ? get_class($travellerPriceListTypeTravellerPriceItem) : gettype($travellerPriceListTypeTravellerPriceItem)), __LINE__);
            }
        }
        $this->TravellerPrice = $travellerPrice;
        return $this;
    }
    /**
     * Add item to TravellerPrice value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TravellerPriceType $item
     * @return \traveltainment\SOAP17\StructType\TravellerPriceListType
     */
    public function addToTravellerPrice(\traveltainment\SOAP17\StructType\TravellerPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\TravellerPriceType) {
            throw new \InvalidArgumentException(sprintf('The TravellerPrice property can only contain items of \traveltainment\SOAP17\StructType\TravellerPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravellerPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TravellerPriceListType
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
