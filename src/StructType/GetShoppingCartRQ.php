<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShoppingCartRQ StructType
 * @subpackage Structs
 */
class GetShoppingCartRQ extends XmlInterfaceRQ
{
    /**
     * The ShoppingCartID
     * @var string
     */
    public $ShoppingCartID;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ShoppingCartOptionsType
     */
    public $Options;
    /**
     * Constructor method for GetShoppingCartRQ
     * @uses GetShoppingCartRQ::setShoppingCartID()
     * @uses GetShoppingCartRQ::setOptions()
     * @param string $shoppingCartID
     * @param \traveltainment\SOAP17\StructType\ShoppingCartOptionsType $options
     */
    public function __construct($shoppingCartID = null, \traveltainment\SOAP17\StructType\ShoppingCartOptionsType $options = null)
    {
        $this
            ->setShoppingCartID($shoppingCartID)
            ->setOptions($options);
    }
    /**
     * Get ShoppingCartID value
     * @return string|null
     */
    public function getShoppingCartID()
    {
        return $this->ShoppingCartID;
    }
    /**
     * Set ShoppingCartID value
     * @param string $shoppingCartID
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRQ
     */
    public function setShoppingCartID($shoppingCartID = null)
    {
        // validation for constraint: string
        if (!is_null($shoppingCartID) && !is_string($shoppingCartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartID)), __LINE__);
        }
        $this->ShoppingCartID = $shoppingCartID;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\ShoppingCartOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\ShoppingCartOptionsType $options
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRQ
     */
    public function setOptions(\traveltainment\SOAP17\StructType\ShoppingCartOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetShoppingCartRQ
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
