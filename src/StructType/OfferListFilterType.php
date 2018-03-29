<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListFilterType StructType
 * @subpackage Structs
 */
class OfferListFilterType extends AbstractStructBase
{
    /**
     * The OfferScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferScope;
    /**
     * Constructor method for OfferListFilterType
     * @uses OfferListFilterType::setOfferScope()
     * @param string $offerScope
     */
    public function __construct($offerScope = null)
    {
        $this
            ->setOfferScope($offerScope);
    }
    /**
     * Get OfferScope value
     * @return string|null
     */
    public function getOfferScope()
    {
        return $this->OfferScope;
    }
    /**
     * Set OfferScope value
     * @uses \EnumType\OfferScopeEnum::valueIsValid()
     * @uses \EnumType\OfferScopeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerScope
     * @return \StructType\OfferListFilterType
     */
    public function setOfferScope($offerScope = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OfferScopeEnum::valueIsValid($offerScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offerScope, implode(', ', \EnumType\OfferScopeEnum::getValidValues())), __LINE__);
        }
        $this->OfferScope = $offerScope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OfferListFilterType
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
