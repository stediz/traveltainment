<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoMessagesType StructType
 * @subpackage Structs
 */
class InfoMessagesType extends AbstractStructBase
{
    /**
     * The InfoMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InfoMessage;
    /**
     * Constructor method for InfoMessagesType
     * @uses InfoMessagesType::setInfoMessage()
     * @param string[] $infoMessage
     */
    public function __construct(array $infoMessage = array())
    {
        $this
            ->setInfoMessage($infoMessage);
    }
    /**
     * Get InfoMessage value
     * @return string[]|null
     */
    public function getInfoMessage()
    {
        return $this->InfoMessage;
    }
    /**
     * Set InfoMessage value
     * @throws \InvalidArgumentException
     * @param string[] $infoMessage
     * @return \traveltainment\SOAP17\StructType\InfoMessagesType
     */
    public function setInfoMessage(array $infoMessage = array())
    {
        foreach ($infoMessage as $infoMessagesTypeInfoMessageItem) {
            // validation for constraint: itemType
            if (!is_string($infoMessagesTypeInfoMessageItem)) {
                throw new \InvalidArgumentException(sprintf('The InfoMessage property can only contain items of string, "%s" given', is_object($infoMessagesTypeInfoMessageItem) ? get_class($infoMessagesTypeInfoMessageItem) : gettype($infoMessagesTypeInfoMessageItem)), __LINE__);
            }
        }
        $this->InfoMessage = $infoMessage;
        return $this;
    }
    /**
     * Add item to InfoMessage value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\InfoMessagesType
     */
    public function addToInfoMessage($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The InfoMessage property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InfoMessage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\InfoMessagesType
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
