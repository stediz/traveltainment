<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for YearOverviewType StructType
 * @subpackage Structs
 */
class YearOverviewType extends AbstractStructBase
{
    /**
     * The ValueOfMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 12
     * - minOccurs: 0
     * @var \StructType\ClimaDataValueType[]
     */
    public $ValueOfMonth;
    /**
     * The ClimaDataType
     * @var string
     */
    public $ClimaDataType;
    /**
     * Constructor method for YearOverviewType
     * @uses YearOverviewType::setValueOfMonth()
     * @uses YearOverviewType::setClimaDataType()
     * @param \StructType\ClimaDataValueType[] $valueOfMonth
     * @param string $climaDataType
     */
    public function __construct(array $valueOfMonth = array(), $climaDataType = null)
    {
        $this
            ->setValueOfMonth($valueOfMonth)
            ->setClimaDataType($climaDataType);
    }
    /**
     * Get ValueOfMonth value
     * @return \StructType\ClimaDataValueType[]|null
     */
    public function getValueOfMonth()
    {
        return $this->ValueOfMonth;
    }
    /**
     * Set ValueOfMonth value
     * @throws \InvalidArgumentException
     * @param \StructType\ClimaDataValueType[] $valueOfMonth
     * @return \StructType\YearOverviewType
     */
    public function setValueOfMonth(array $valueOfMonth = array())
    {
        foreach ($valueOfMonth as $yearOverviewTypeValueOfMonthItem) {
            // validation for constraint: itemType
            if (!$yearOverviewTypeValueOfMonthItem instanceof \StructType\ClimaDataValueType) {
                throw new \InvalidArgumentException(sprintf('The ValueOfMonth property can only contain items of \StructType\ClimaDataValueType, "%s" given', is_object($yearOverviewTypeValueOfMonthItem) ? get_class($yearOverviewTypeValueOfMonthItem) : gettype($yearOverviewTypeValueOfMonthItem)), __LINE__);
            }
        }
        $this->ValueOfMonth = $valueOfMonth;
        return $this;
    }
    /**
     * Add item to ValueOfMonth value
     * @throws \InvalidArgumentException
     * @param \StructType\ClimaDataValueType $item
     * @return \StructType\YearOverviewType
     */
    public function addToValueOfMonth(\StructType\ClimaDataValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ClimaDataValueType) {
            throw new \InvalidArgumentException(sprintf('The ValueOfMonth property can only contain items of \StructType\ClimaDataValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValueOfMonth[] = $item;
        return $this;
    }
    /**
     * Get ClimaDataType value
     * @return string|null
     */
    public function getClimaDataType()
    {
        return $this->ClimaDataType;
    }
    /**
     * Set ClimaDataType value
     * @uses \EnumType\ClimaDataTypeEnum::valueIsValid()
     * @uses \EnumType\ClimaDataTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $climaDataType
     * @return \StructType\YearOverviewType
     */
    public function setClimaDataType($climaDataType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClimaDataTypeEnum::valueIsValid($climaDataType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $climaDataType, implode(', ', \EnumType\ClimaDataTypeEnum::getValidValues())), __LINE__);
        }
        $this->ClimaDataType = $climaDataType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\YearOverviewType
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
