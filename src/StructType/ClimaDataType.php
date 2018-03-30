<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClimaDataType StructType
 * @subpackage Structs
 */
class ClimaDataType extends AbstractStructBase
{
    /**
     * The YearOverview
     * Meta informations extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\YearOverviewType[]
     */
    public $YearOverview;
    /**
     * Constructor method for ClimaDataType
     * @uses ClimaDataType::setYearOverview()
     * @param \traveltainment\SOAP17\StructType\YearOverviewType[] $yearOverview
     */
    public function __construct(array $yearOverview = array())
    {
        $this
            ->setYearOverview($yearOverview);
    }
    /**
     * Get YearOverview value
     * @return \traveltainment\SOAP17\StructType\YearOverviewType[]|null
     */
    public function getYearOverview()
    {
        return $this->YearOverview;
    }
    /**
     * Set YearOverview value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\YearOverviewType[] $yearOverview
     * @return \traveltainment\SOAP17\StructType\ClimaDataType
     */
    public function setYearOverview(array $yearOverview = array())
    {
        foreach ($yearOverview as $climaDataTypeYearOverviewItem) {
            // validation for constraint: itemType
            if (!$climaDataTypeYearOverviewItem instanceof \traveltainment\SOAP17\StructType\YearOverviewType) {
                throw new \InvalidArgumentException(sprintf('The YearOverview property can only contain items of \traveltainment\SOAP17\StructType\YearOverviewType, "%s" given', is_object($climaDataTypeYearOverviewItem) ? get_class($climaDataTypeYearOverviewItem) : gettype($climaDataTypeYearOverviewItem)), __LINE__);
            }
        }
        $this->YearOverview = $yearOverview;
        return $this;
    }
    /**
     * Add item to YearOverview value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\YearOverviewType $item
     * @return \traveltainment\SOAP17\StructType\ClimaDataType
     */
    public function addToYearOverview(\traveltainment\SOAP17\StructType\YearOverviewType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\YearOverviewType) {
            throw new \InvalidArgumentException(sprintf('The YearOverview property can only contain items of \traveltainment\SOAP17\StructType\YearOverviewType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->YearOverview[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ClimaDataType
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
