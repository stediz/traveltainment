<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleRegionOfferType StructType
 * @subpackage Structs
 */
class SimpleRegionOfferType extends AbstractStructBase
{
    /**
     * The Region
     * @var \traveltainment\SOAP17\StructType\RegionListRegionType
     */
    public $Region;
    /**
     * The SimpleOffer
     * @var \traveltainment\SOAP17\StructType\SimpleOffer
     */
    public $SimpleOffer;
    /**
     * Constructor method for SimpleRegionOfferType
     * @uses SimpleRegionOfferType::setRegion()
     * @uses SimpleRegionOfferType::setSimpleOffer()
     * @param \traveltainment\SOAP17\StructType\RegionListRegionType $region
     * @param \traveltainment\SOAP17\StructType\SimpleOffer $simpleOffer
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionListRegionType $region = null, \traveltainment\SOAP17\StructType\SimpleOffer $simpleOffer = null)
    {
        $this
            ->setRegion($region)
            ->setSimpleOffer($simpleOffer);
    }
    /**
     * Get Region value
     * @return \traveltainment\SOAP17\StructType\RegionListRegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \traveltainment\SOAP17\StructType\RegionListRegionType $region
     * @return \traveltainment\SOAP17\StructType\SimpleRegionOfferType
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionListRegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get SimpleOffer value
     * @return \traveltainment\SOAP17\StructType\SimpleOffer|null
     */
    public function getSimpleOffer()
    {
        return $this->SimpleOffer;
    }
    /**
     * Set SimpleOffer value
     * @param \traveltainment\SOAP17\StructType\SimpleOffer $simpleOffer
     * @return \traveltainment\SOAP17\StructType\SimpleRegionOfferType
     */
    public function setSimpleOffer(\traveltainment\SOAP17\StructType\SimpleOffer $simpleOffer = null)
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
     * @return \traveltainment\SOAP17\StructType\SimpleRegionOfferType
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
