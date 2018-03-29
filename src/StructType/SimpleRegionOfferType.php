<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleRegionOfferType StructType
 * @subpackage Structs
 */
class SimpleRegionOfferType extends AbstractStructBase
{
    /**
     * The Region
     * @var \StructType\RegionListRegionType
     */
    public $Region;
    /**
     * The SimpleOffer
     * @var \StructType\SimpleOffer
     */
    public $SimpleOffer;
    /**
     * Constructor method for SimpleRegionOfferType
     * @uses SimpleRegionOfferType::setRegion()
     * @uses SimpleRegionOfferType::setSimpleOffer()
     * @param \StructType\RegionListRegionType $region
     * @param \StructType\SimpleOffer $simpleOffer
     */
    public function __construct(\StructType\RegionListRegionType $region = null, \StructType\SimpleOffer $simpleOffer = null)
    {
        $this
            ->setRegion($region)
            ->setSimpleOffer($simpleOffer);
    }
    /**
     * Get Region value
     * @return \StructType\RegionListRegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \StructType\RegionListRegionType $region
     * @return \StructType\SimpleRegionOfferType
     */
    public function setRegion(\StructType\RegionListRegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get SimpleOffer value
     * @return \StructType\SimpleOffer|null
     */
    public function getSimpleOffer()
    {
        return $this->SimpleOffer;
    }
    /**
     * Set SimpleOffer value
     * @param \StructType\SimpleOffer $simpleOffer
     * @return \StructType\SimpleRegionOfferType
     */
    public function setSimpleOffer(\StructType\SimpleOffer $simpleOffer = null)
    {
        $this->SimpleOffer = $simpleOffer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleRegionOfferType
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
