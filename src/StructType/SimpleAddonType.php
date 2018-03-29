<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleAddonType StructType
 * @subpackage Structs
 */
class SimpleAddonType extends AbstractStructBase
{
    /**
     * The AddonID
     * @var string
     */
    public $AddonID;
    /**
     * The CreationDate
     * @var string
     */
    public $CreationDate;
    /**
     * The Credentials
     * @var \StructType\CredentialsType
     */
    public $Credentials;
    /**
     * Constructor method for SimpleAddonType
     * @uses SimpleAddonType::setAddonID()
     * @uses SimpleAddonType::setCreationDate()
     * @uses SimpleAddonType::setCredentials()
     * @param string $addonID
     * @param string $creationDate
     * @param \StructType\CredentialsType $credentials
     */
    public function __construct($addonID = null, $creationDate = null, \StructType\CredentialsType $credentials = null)
    {
        $this
            ->setAddonID($addonID)
            ->setCreationDate($creationDate)
            ->setCredentials($credentials);
    }
    /**
     * Get AddonID value
     * @return string|null
     */
    public function getAddonID()
    {
        return $this->AddonID;
    }
    /**
     * Set AddonID value
     * @param string $addonID
     * @return \StructType\SimpleAddonType
     */
    public function setAddonID($addonID = null)
    {
        // validation for constraint: string
        if (!is_null($addonID) && !is_string($addonID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addonID)), __LINE__);
        }
        $this->AddonID = $addonID;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\SimpleAddonType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \StructType\CredentialsType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \StructType\CredentialsType $credentials
     * @return \StructType\SimpleAddonType
     */
    public function setCredentials(\StructType\CredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleAddonType
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
