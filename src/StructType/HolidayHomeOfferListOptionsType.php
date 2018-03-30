<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferListOptionsType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferListOptionsType extends HolidayHomeOptionsType
{
    /**
     * The Sorting
     * Meta informations extracted from the WSDL
     * - default: PERCENTAGEFIT
     * @var string
     */
    public $Sorting;
    /**
     * Constructor method for HolidayHomeOfferListOptionsType
     * @uses HolidayHomeOfferListOptionsType::setSorting()
     * @param string $sorting
     */
    public function __construct($sorting = 'PERCENTAGEFIT')
    {
        $this
            ->setSorting($sorting);
    }
    /**
     * Get Sorting value
     * @return string|null
     */
    public function getSorting()
    {
        return $this->Sorting;
    }
    /**
     * Set Sorting value
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeOfferSortEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeOfferSortEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sorting
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType
     */
    public function setSorting($sorting = 'PERCENTAGEFIT')
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HolidayHomeOfferSortEnum::valueIsValid($sorting)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sorting, implode(', ', \traveltainment\SOAP17\EnumType\HolidayHomeOfferSortEnum::getValidValues())), __LINE__);
        }
        $this->Sorting = $sorting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListOptionsType
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
