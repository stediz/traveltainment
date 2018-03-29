<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDateSpanType StructType
 * @subpackage Structs
 */
class TravelDateSpanType extends AbstractStructBase
{
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DepartureDate
     */
    public $DepartureDate;
    /**
     * The ReturnDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ReturnDate
     */
    public $ReturnDate;
    /**
     * Constructor method for TravelDateSpanType
     * @uses TravelDateSpanType::setDepartureDate()
     * @uses TravelDateSpanType::setReturnDate()
     * @param \StructType\DepartureDate $departureDate
     * @param \StructType\ReturnDate $returnDate
     */
    public function __construct(\StructType\DepartureDate $departureDate = null, \StructType\ReturnDate $returnDate = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setReturnDate($returnDate);
    }
    /**
     * Get DepartureDate value
     * @return \StructType\DepartureDate|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param \StructType\DepartureDate $departureDate
     * @return \StructType\TravelDateSpanType
     */
    public function setDepartureDate(\StructType\DepartureDate $departureDate = null)
    {
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get ReturnDate value
     * @return \StructType\ReturnDate|null
     */
    public function getReturnDate()
    {
        return $this->ReturnDate;
    }
    /**
     * Set ReturnDate value
     * @param \StructType\ReturnDate $returnDate
     * @return \StructType\TravelDateSpanType
     */
    public function setReturnDate(\StructType\ReturnDate $returnDate = null)
    {
        $this->ReturnDate = $returnDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TravelDateSpanType
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
