<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenList StructType
 * @subpackage Structs
 */
class TokenList extends AbstractStructBase
{
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\Token[]
     */
    public $Token;
    /**
     * Constructor method for TokenList
     * @uses TokenList::setToken()
     * @param \traveltainment\SOAP17\StructType\Token[] $token
     */
    public function __construct(array $token = array())
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return \traveltainment\SOAP17\StructType\Token[]|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\Token[] $token
     * @return \traveltainment\SOAP17\StructType\TokenList
     */
    public function setToken(array $token = array())
    {
        foreach ($token as $tokenListTokenItem) {
            // validation for constraint: itemType
            if (!$tokenListTokenItem instanceof \traveltainment\SOAP17\StructType\Token) {
                throw new \InvalidArgumentException(sprintf('The Token property can only contain items of \traveltainment\SOAP17\StructType\Token, "%s" given', is_object($tokenListTokenItem) ? get_class($tokenListTokenItem) : gettype($tokenListTokenItem)), __LINE__);
            }
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Add item to Token value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\Token $item
     * @return \traveltainment\SOAP17\StructType\TokenList
     */
    public function addToToken(\traveltainment\SOAP17\StructType\Token $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\Token) {
            throw new \InvalidArgumentException(sprintf('The Token property can only contain items of \traveltainment\SOAP17\StructType\Token, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Token[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TokenList
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
