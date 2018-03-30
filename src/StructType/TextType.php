<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextType StructType
 * @subpackage Structs
 */
class TextType extends AbstractStructBase
{
    /**
     * The TextURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $TextURL;
    /**
     * Constructor method for TextType
     * @uses TextType::setTextURL()
     * @param string[] $textURL
     */
    public function __construct(array $textURL = array())
    {
        $this
            ->setTextURL($textURL);
    }
    /**
     * Get TextURL value
     * @return string[]
     */
    public function getTextURL()
    {
        return $this->TextURL;
    }
    /**
     * Set TextURL value
     * @throws \InvalidArgumentException
     * @param string[] $textURL
     * @return \traveltainment\SOAP17\StructType\TextType
     */
    public function setTextURL(array $textURL = array())
    {
        foreach ($textURL as $textTypeTextURLItem) {
            // validation for constraint: itemType
            if (!is_string($textTypeTextURLItem)) {
                throw new \InvalidArgumentException(sprintf('The TextURL property can only contain items of string, "%s" given', is_object($textTypeTextURLItem) ? get_class($textTypeTextURLItem) : gettype($textTypeTextURLItem)), __LINE__);
            }
        }
        $this->TextURL = $textURL;
        return $this;
    }
    /**
     * Add item to TextURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\TextType
     */
    public function addToTextURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TextURL property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextURL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TextType
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
