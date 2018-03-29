<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CautionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Der CautionsType enthaelt die Veranstaltermittelungen.
 * @subpackage Structs
 */
class CautionsType extends AbstractStructBase
{
    /**
     * The Caution
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CautionType[]
     */
    public $Caution;
    /**
     * Constructor method for CautionsType
     * @uses CautionsType::setCaution()
     * @param \StructType\CautionType[] $caution
     */
    public function __construct(array $caution = array())
    {
        $this
            ->setCaution($caution);
    }
    /**
     * Get Caution value
     * @return \StructType\CautionType[]|null
     */
    public function getCaution()
    {
        return $this->Caution;
    }
    /**
     * Set Caution value
     * @throws \InvalidArgumentException
     * @param \StructType\CautionType[] $caution
     * @return \StructType\CautionsType
     */
    public function setCaution(array $caution = array())
    {
        foreach ($caution as $cautionsTypeCautionItem) {
            // validation for constraint: itemType
            if (!$cautionsTypeCautionItem instanceof \StructType\CautionType) {
                throw new \InvalidArgumentException(sprintf('The Caution property can only contain items of \StructType\CautionType, "%s" given', is_object($cautionsTypeCautionItem) ? get_class($cautionsTypeCautionItem) : gettype($cautionsTypeCautionItem)), __LINE__);
            }
        }
        $this->Caution = $caution;
        return $this;
    }
    /**
     * Add item to Caution value
     * @throws \InvalidArgumentException
     * @param \StructType\CautionType $item
     * @return \StructType\CautionsType
     */
    public function addToCaution(\StructType\CautionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CautionType) {
            throw new \InvalidArgumentException(sprintf('The Caution property can only contain items of \StructType\CautionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Caution[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CautionsType
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
