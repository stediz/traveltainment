<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProceduresType StructType
 * @subpackage Structs
 */
class ProceduresType extends AbstractStructBase
{
    /**
     * The ArrivalProcedure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalProcedure;
    /**
     * The DepartureProcedure
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureProcedure;
    /**
     * The WithValet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WithValet;
    /**
     * Constructor method for ProceduresType
     * @uses ProceduresType::setArrivalProcedure()
     * @uses ProceduresType::setDepartureProcedure()
     * @uses ProceduresType::setWithValet()
     * @param string $arrivalProcedure
     * @param string $departureProcedure
     * @param bool $withValet
     */
    public function __construct($arrivalProcedure = null, $departureProcedure = null, $withValet = null)
    {
        $this
            ->setArrivalProcedure($arrivalProcedure)
            ->setDepartureProcedure($departureProcedure)
            ->setWithValet($withValet);
    }
    /**
     * Get ArrivalProcedure value
     * @return string|null
     */
    public function getArrivalProcedure()
    {
        return $this->ArrivalProcedure;
    }
    /**
     * Set ArrivalProcedure value
     * @param string $arrivalProcedure
     * @return \traveltainment\SOAP17\StructType\ProceduresType
     */
    public function setArrivalProcedure($arrivalProcedure = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalProcedure) && !is_string($arrivalProcedure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalProcedure)), __LINE__);
        }
        $this->ArrivalProcedure = $arrivalProcedure;
        return $this;
    }
    /**
     * Get DepartureProcedure value
     * @return string|null
     */
    public function getDepartureProcedure()
    {
        return $this->DepartureProcedure;
    }
    /**
     * Set DepartureProcedure value
     * @param string $departureProcedure
     * @return \traveltainment\SOAP17\StructType\ProceduresType
     */
    public function setDepartureProcedure($departureProcedure = null)
    {
        // validation for constraint: string
        if (!is_null($departureProcedure) && !is_string($departureProcedure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureProcedure)), __LINE__);
        }
        $this->DepartureProcedure = $departureProcedure;
        return $this;
    }
    /**
     * Get WithValet value
     * @return bool|null
     */
    public function getWithValet()
    {
        return $this->WithValet;
    }
    /**
     * Set WithValet value
     * @param bool $withValet
     * @return \traveltainment\SOAP17\StructType\ProceduresType
     */
    public function setWithValet($withValet = null)
    {
        // validation for constraint: boolean
        if (!is_null($withValet) && !is_bool($withValet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($withValet)), __LINE__);
        }
        $this->WithValet = $withValet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ProceduresType
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
