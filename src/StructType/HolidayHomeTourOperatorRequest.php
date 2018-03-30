<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeTourOperatorRequest StructType
 * @subpackage Structs
 */
class HolidayHomeTourOperatorRequest extends AbstractStructBase
{
    /**
     * The Limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperator
     */
    public $Limit;
    /**
     * The Skip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperator
     */
    public $Skip;
    /**
     * The AccomCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccomCode;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * The ProgramType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProgramType;
    /**
     * Constructor method for HolidayHomeTourOperatorRequest
     * @uses HolidayHomeTourOperatorRequest::setLimit()
     * @uses HolidayHomeTourOperatorRequest::setSkip()
     * @uses HolidayHomeTourOperatorRequest::setAccomCode()
     * @uses HolidayHomeTourOperatorRequest::setTravelType()
     * @uses HolidayHomeTourOperatorRequest::setProgramType()
     * @param \traveltainment\SOAP17\StructType\TourOperator $limit
     * @param \traveltainment\SOAP17\StructType\TourOperator $skip
     * @param string $accomCode
     * @param string $travelType
     * @param string $programType
     */
    public function __construct(\traveltainment\SOAP17\StructType\TourOperator $limit = null, \traveltainment\SOAP17\StructType\TourOperator $skip = null, $accomCode = null, $travelType = null, $programType = null)
    {
        $this
            ->setLimit($limit)
            ->setSkip($skip)
            ->setAccomCode($accomCode)
            ->setTravelType($travelType)
            ->setProgramType($programType);
    }
    /**
     * Get Limit value
     * @return \traveltainment\SOAP17\StructType\TourOperator|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }
    /**
     * Set Limit value
     * @param \traveltainment\SOAP17\StructType\TourOperator $limit
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public function setLimit(\traveltainment\SOAP17\StructType\TourOperator $limit = null)
    {
        $this->Limit = $limit;
        return $this;
    }
    /**
     * Get Skip value
     * @return \traveltainment\SOAP17\StructType\TourOperator|null
     */
    public function getSkip()
    {
        return $this->Skip;
    }
    /**
     * Set Skip value
     * @param \traveltainment\SOAP17\StructType\TourOperator $skip
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public function setSkip(\traveltainment\SOAP17\StructType\TourOperator $skip = null)
    {
        $this->Skip = $skip;
        return $this;
    }
    /**
     * Get AccomCode value
     * @return string|null
     */
    public function getAccomCode()
    {
        return $this->AccomCode;
    }
    /**
     * Set AccomCode value
     * @param string $accomCode
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public function setAccomCode($accomCode = null)
    {
        // validation for constraint: string
        if (!is_null($accomCode) && !is_string($accomCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accomCode)), __LINE__);
        }
        $this->AccomCode = $accomCode;
        return $this;
    }
    /**
     * Get TravelType value
     * @return string|null
     */
    public function getTravelType()
    {
        return $this->TravelType;
    }
    /**
     * Set TravelType value
     * @param string $travelType
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public function setTravelType($travelType = null)
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelType)), __LINE__);
        }
        $this->TravelType = $travelType;
        return $this;
    }
    /**
     * Get ProgramType value
     * @return string|null
     */
    public function getProgramType()
    {
        return $this->ProgramType;
    }
    /**
     * Set ProgramType value
     * @param string $programType
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
     */
    public function setProgramType($programType = null)
    {
        // validation for constraint: string
        if (!is_null($programType) && !is_string($programType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programType)), __LINE__);
        }
        $this->ProgramType = $programType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeTourOperatorRequest
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
