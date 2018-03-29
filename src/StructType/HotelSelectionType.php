<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSelectionType StructType
 * @subpackage Structs
 */
class HotelSelectionType extends AbstractStructBase
{
    /**
     * The ObjectID
     * @var \StructType\ObjectIDType
     */
    public $ObjectID;
    /**
     * The AccomCode
     * @var \StructType\AccomCodeType
     */
    public $AccomCode;
    /**
     * Constructor method for HotelSelectionType
     * @uses HotelSelectionType::setObjectID()
     * @uses HotelSelectionType::setAccomCode()
     * @param \StructType\ObjectIDType $objectID
     * @param \StructType\AccomCodeType $accomCode
     */
    public function __construct(\StructType\ObjectIDType $objectID = null, \StructType\AccomCodeType $accomCode = null)
    {
        $this
            ->setObjectID($objectID)
            ->setAccomCode($accomCode);
    }
    /**
     * Get ObjectID value
     * @return \StructType\ObjectIDType|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param \StructType\ObjectIDType $objectID
     * @return \StructType\HotelSelectionType
     */
    public function setObjectID(\StructType\ObjectIDType $objectID = null)
    {
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get AccomCode value
     * @return \StructType\AccomCodeType|null
     */
    public function getAccomCode()
    {
        return $this->AccomCode;
    }
    /**
     * Set AccomCode value
     * @param \StructType\AccomCodeType $accomCode
     * @return \StructType\HotelSelectionType
     */
    public function setAccomCode(\StructType\AccomCodeType $accomCode = null)
    {
        $this->AccomCode = $accomCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelSelectionType
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
