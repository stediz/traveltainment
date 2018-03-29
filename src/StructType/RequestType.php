<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestType StructType
 * @subpackage Structs
 */
class RequestType extends AbstractStructBase
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - use: required
     * - maxInclusive: 1.700
     * - minInclusive: 0.901
     * @var float
     */
    public $Version;
    /**
     * The RQ_Metadata
     * @var \StructType\RQ_MetadataType
     */
    public $RQ_Metadata;
    /**
     * Constructor method for RequestType
     * @uses RequestType::setVersion()
     * @uses RequestType::setRQ_Metadata()
     * @param float $version
     * @param \StructType\RQ_MetadataType $rQ_Metadata
     */
    public function __construct($version = null, \StructType\RQ_MetadataType $rQ_Metadata = null)
    {
        $this
            ->setVersion($version)
            ->setRQ_Metadata($rQ_Metadata);
    }
    /**
     * Get Version value
     * @return float
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param float $version
     * @return \StructType\RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: maxInclusive
        if ($version > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 1, "%s" given', $version), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($version < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $version), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get RQ_Metadata value
     * @return \StructType\RQ_MetadataType|null
     */
    public function getRQ_Metadata()
    {
        return $this->RQ_Metadata;
    }
    /**
     * Set RQ_Metadata value
     * @param \StructType\RQ_MetadataType $rQ_Metadata
     * @return \StructType\RequestType
     */
    public function setRQ_Metadata(\StructType\RQ_MetadataType $rQ_Metadata = null)
    {
        $this->RQ_Metadata = $rQ_Metadata;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RequestType
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
