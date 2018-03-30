<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferListSearchType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferListSearchType extends HolidayHomeSearchType
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType
     */
    public $Options;
    /**
     * Constructor method for HolidayHomeOfferListSearchType
     * @uses HolidayHomeOfferListSearchType::setOptions()
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType $options
     */
    public function __construct(\traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType $options
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType
     */
    public function setOptions(\traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListSearchType
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
