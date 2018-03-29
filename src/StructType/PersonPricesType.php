<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonPricesType StructType
 * @subpackage Structs
 */
class PersonPricesType extends AbstractStructBase
{
    /**
     * The PersonPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\PersonPriceType[]
     */
    public $PersonPrice;
    /**
     * Constructor method for PersonPricesType
     * @uses PersonPricesType::setPersonPrice()
     * @param \StructType\PersonPriceType[] $personPrice
     */
    public function __construct(array $personPrice = array())
    {
        $this
            ->setPersonPrice($personPrice);
    }
    /**
     * Get PersonPrice value
     * @return \StructType\PersonPriceType[]|null
     */
    public function getPersonPrice()
    {
        return $this->PersonPrice;
    }
    /**
     * Set PersonPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\PersonPriceType[] $personPrice
     * @return \StructType\PersonPricesType
     */
    public function setPersonPrice(array $personPrice = array())
    {
        foreach ($personPrice as $personPricesTypePersonPriceItem) {
            // validation for constraint: itemType
            if (!$personPricesTypePersonPriceItem instanceof \StructType\PersonPriceType) {
                throw new \InvalidArgumentException(sprintf('The PersonPrice property can only contain items of \StructType\PersonPriceType, "%s" given', is_object($personPricesTypePersonPriceItem) ? get_class($personPricesTypePersonPriceItem) : gettype($personPricesTypePersonPriceItem)), __LINE__);
            }
        }
        $this->PersonPrice = $personPrice;
        return $this;
    }
    /**
     * Add item to PersonPrice value
     * @throws \InvalidArgumentException
     * @param \StructType\PersonPriceType $item
     * @return \StructType\PersonPricesType
     */
    public function addToPersonPrice(\StructType\PersonPriceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PersonPriceType) {
            throw new \InvalidArgumentException(sprintf('The PersonPrice property can only contain items of \StructType\PersonPriceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PersonPrice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PersonPricesType
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
