<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RussianMarketScopedType StructType
 * @subpackage Structs
 */
class RussianMarketScopedType extends AbstractStructBase
{
    /**
     * The TravelDocumentToken
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $TravelDocumentToken;
    /**
     * Constructor method for RussianMarketScopedType
     * @uses RussianMarketScopedType::setTravelDocumentToken()
     * @param string $travelDocumentToken
     */
    public function __construct($travelDocumentToken = null)
    {
        $this
            ->setTravelDocumentToken($travelDocumentToken);
    }
    /**
     * Get TravelDocumentToken value
     * @return string|null
     */
    public function getTravelDocumentToken()
    {
        return $this->TravelDocumentToken;
    }
    /**
     * Set TravelDocumentToken value
     * @param string $travelDocumentToken
     * @return \traveltainment\SOAP17\StructType\RussianMarketScopedType
     */
    public function setTravelDocumentToken($travelDocumentToken = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($travelDocumentToken) && strlen($travelDocumentToken) < 1) || (is_array($travelDocumentToken) && count($travelDocumentToken) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($travelDocumentToken) && !is_string($travelDocumentToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelDocumentToken)), __LINE__);
        }
        $this->TravelDocumentToken = $travelDocumentToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RussianMarketScopedType
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
