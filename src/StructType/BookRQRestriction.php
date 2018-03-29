<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRQRestriction StructType
 * @subpackage Structs
 */
class BookRQRestriction extends XmlInterfaceRQ
{
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SessionID;
    /**
     * The CID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CID;
    /**
     * Constructor method for BookRQRestriction
     * @uses BookRQRestriction::setSessionID()
     * @uses BookRQRestriction::setCID()
     * @param string $sessionID
     * @param string $cID
     */
    public function __construct($sessionID = null, $cID = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setCID($cID);
    }
    /**
     * Get SessionID value
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \StructType\BookRQRestriction
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get CID value
     * @return string|null
     */
    public function getCID()
    {
        return $this->CID;
    }
    /**
     * Set CID value
     * @param string $cID
     * @return \StructType\BookRQRestriction
     */
    public function setCID($cID = null)
    {
        // validation for constraint: string
        if (!is_null($cID) && !is_string($cID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cID)), __LINE__);
        }
        $this->CID = $cID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BookRQRestriction
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
