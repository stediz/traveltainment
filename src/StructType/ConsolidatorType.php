<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatorType StructType
 * @subpackage Structs
 */
class ConsolidatorType extends AbstractStructBase
{
    /**
     * The Consolidator
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Consolidator;
    /**
     * The ConfID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $ConfID;
    /**
     * The Param
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\KeyValueType[]
     */
    public $Param;
    /**
     * The UID
     * @var string
     */
    public $UID;
    /**
     * Constructor method for ConsolidatorType
     * @uses ConsolidatorType::setConsolidator()
     * @uses ConsolidatorType::setConfID()
     * @uses ConsolidatorType::setParam()
     * @uses ConsolidatorType::setUID()
     * @param string $consolidator
     * @param int $confID
     * @param \traveltainment\SOAP17\StructType\KeyValueType[] $param
     * @param string $uID
     */
    public function __construct($consolidator = null, $confID = null, array $param = array(), $uID = null)
    {
        $this
            ->setConsolidator($consolidator)
            ->setConfID($confID)
            ->setParam($param)
            ->setUID($uID);
    }
    /**
     * Get Consolidator value
     * @return string
     */
    public function getConsolidator()
    {
        return $this->Consolidator;
    }
    /**
     * Set Consolidator value
     * @param string $consolidator
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public function setConsolidator($consolidator = null)
    {
        // validation for constraint: string
        if (!is_null($consolidator) && !is_string($consolidator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consolidator)), __LINE__);
        }
        $this->Consolidator = $consolidator;
        return $this;
    }
    /**
     * Get ConfID value
     * @return int
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param int $confID
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public function setConfID($confID = null)
    {
        // validation for constraint: int
        if (!is_null($confID) && !is_numeric($confID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($confID)), __LINE__);
        }
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get Param value
     * @return \traveltainment\SOAP17\StructType\KeyValueType[]|null
     */
    public function getParam()
    {
        return $this->Param;
    }
    /**
     * Set Param value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\KeyValueType[] $param
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public function setParam(array $param = array())
    {
        foreach ($param as $consolidatorTypeParamItem) {
            // validation for constraint: itemType
            if (!$consolidatorTypeParamItem instanceof \traveltainment\SOAP17\StructType\KeyValueType) {
                throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \traveltainment\SOAP17\StructType\KeyValueType, "%s" given', is_object($consolidatorTypeParamItem) ? get_class($consolidatorTypeParamItem) : gettype($consolidatorTypeParamItem)), __LINE__);
            }
        }
        $this->Param = $param;
        return $this;
    }
    /**
     * Add item to Param value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\KeyValueType $item
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public function addToParam(\traveltainment\SOAP17\StructType\KeyValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\KeyValueType) {
            throw new \InvalidArgumentException(sprintf('The Param property can only contain items of \traveltainment\SOAP17\StructType\KeyValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Param[] = $item;
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public function setUID($uID = null)
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType
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
