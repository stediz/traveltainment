<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryCity StructType
 * @subpackage Structs
 */
class SummaryCity extends AbstractStructBase
{
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SummaryItemCity[]
     */
    public $City;
    /**
     * Constructor method for SummaryCity
     * @uses SummaryCity::setCity()
     * @param \traveltainment\SOAP17\StructType\SummaryItemCity[] $city
     */
    public function __construct(array $city = array())
    {
        $this
            ->setCity($city);
    }
    /**
     * Get City value
     * @return \traveltainment\SOAP17\StructType\SummaryItemCity[]|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\SummaryItemCity[] $city
     * @return \traveltainment\SOAP17\StructType\SummaryCity
     */
    public function setCity(array $city = array())
    {
        foreach ($city as $summaryCityCityItem) {
            // validation for constraint: itemType
            if (!$summaryCityCityItem instanceof \traveltainment\SOAP17\StructType\SummaryItemCity) {
                throw new \InvalidArgumentException(sprintf('The City property can only contain items of \traveltainment\SOAP17\StructType\SummaryItemCity, "%s" given', is_object($summaryCityCityItem) ? get_class($summaryCityCityItem) : gettype($summaryCityCityItem)), __LINE__);
            }
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Add item to City value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\SummaryItemCity $item
     * @return \traveltainment\SOAP17\StructType\SummaryCity
     */
    public function addToCity(\traveltainment\SOAP17\StructType\SummaryItemCity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\SummaryItemCity) {
            throw new \InvalidArgumentException(sprintf('The City property can only contain items of \traveltainment\SOAP17\StructType\SummaryItemCity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->City[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SummaryCity
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
