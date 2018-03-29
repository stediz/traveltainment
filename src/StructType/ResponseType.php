<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseType StructType
 * @subpackage Structs
 */
class ResponseType extends AbstractStructBase
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
     * The RS_Metadata
     * @var \StructType\RS_MetadataType
     */
    public $RS_Metadata;
    /**
     * Constructor method for ResponseType
     * @uses ResponseType::setVersion()
     * @uses ResponseType::setRS_Metadata()
     * @param float $version
     * @param \StructType\RS_MetadataType $rS_Metadata
     */
    public function __construct($version = null, \StructType\RS_MetadataType $rS_Metadata = null)
    {
        $this
            ->setVersion($version)
            ->setRS_Metadata($rS_Metadata);
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
     * @return \StructType\ResponseType
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
     * Get RS_Metadata value
     * @return \StructType\RS_MetadataType|null
     */
    public function getRS_Metadata()
    {
        return $this->RS_Metadata;
    }
    /**
     * Set RS_Metadata value
     * @param \StructType\RS_MetadataType $rS_Metadata
     * @return \StructType\ResponseType
     */
    public function setRS_Metadata(\StructType\RS_MetadataType $rS_Metadata = null)
    {
        $this->RS_Metadata = $rS_Metadata;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ResponseType
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
