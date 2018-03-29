<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInfoType StructType
 * @subpackage Structs
 */
class AdditionalInfoType extends AbstractStructBase
{
    /**
     * The AdditionalInfoLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 1
     * @var string[]
     */
    public $AdditionalInfoLine;
    /**
     * Constructor method for AdditionalInfoType
     * @uses AdditionalInfoType::setAdditionalInfoLine()
     * @param string[] $additionalInfoLine
     */
    public function __construct(array $additionalInfoLine = array())
    {
        $this
            ->setAdditionalInfoLine($additionalInfoLine);
    }
    /**
     * Get AdditionalInfoLine value
     * @return string[]
     */
    public function getAdditionalInfoLine()
    {
        return $this->AdditionalInfoLine;
    }
    /**
     * Set AdditionalInfoLine value
     * @throws \InvalidArgumentException
     * @param string[] $additionalInfoLine
     * @return \StructType\AdditionalInfoType
     */
    public function setAdditionalInfoLine(array $additionalInfoLine = array())
    {
        foreach ($additionalInfoLine as $additionalInfoTypeAdditionalInfoLineItem) {
            // validation for constraint: itemType
            if (!is_string($additionalInfoTypeAdditionalInfoLineItem)) {
                throw new \InvalidArgumentException(sprintf('The AdditionalInfoLine property can only contain items of string, "%s" given', is_object($additionalInfoTypeAdditionalInfoLineItem) ? get_class($additionalInfoTypeAdditionalInfoLineItem) : gettype($additionalInfoTypeAdditionalInfoLineItem)), __LINE__);
            }
        }
        $this->AdditionalInfoLine = $additionalInfoLine;
        return $this;
    }
    /**
     * Add item to AdditionalInfoLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\AdditionalInfoType
     */
    public function addToAdditionalInfoLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AdditionalInfoLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalInfoLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalInfoType
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
