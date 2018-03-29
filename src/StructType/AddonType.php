<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonType StructType
 * @subpackage Structs
 */
class AddonType extends AbstractStructBase
{
    /**
     * The AddonID
     * @var string
     */
    public $AddonID;
    /**
     * The AddonType
     * @var string
     */
    public $AddonType;
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
     * The Comments
     * @var \StructType\CommentList
     */
    public $Comments;
    /**
     * The Params
     * @var \StructType\ParamList
     */
    public $Params;
    /**
     * Constructor method for AddonType
     * @uses AddonType::setAddonID()
     * @uses AddonType::setAddonType()
     * @uses AddonType::setCreationDate()
     * @uses AddonType::setCredentials()
     * @uses AddonType::setComments()
     * @uses AddonType::setParams()
     * @param string $addonID
     * @param string $addonType
     * @param string $creationDate
     * @param \StructType\CredentialsType $credentials
     * @param \StructType\CommentList $comments
     * @param \StructType\ParamList $params
     */
    public function __construct($addonID = null, $addonType = null, $creationDate = null, \StructType\CredentialsType $credentials = null, \StructType\CommentList $comments = null, \StructType\ParamList $params = null)
    {
        $this
            ->setAddonID($addonID)
            ->setAddonType($addonType)
            ->setCreationDate($creationDate)
            ->setCredentials($credentials)
            ->setComments($comments)
            ->setParams($params);
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
     * @return \StructType\AddonType
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
     * Get AddonType value
     * @return string|null
     */
    public function getAddonType()
    {
        return $this->AddonType;
    }
    /**
     * Set AddonType value
     * @uses \EnumType\AddonDefinitionTypeEnum::valueIsValid()
     * @uses \EnumType\AddonDefinitionTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addonType
     * @return \StructType\AddonType
     */
    public function setAddonType($addonType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddonDefinitionTypeEnum::valueIsValid($addonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addonType, implode(', ', \EnumType\AddonDefinitionTypeEnum::getValidValues())), __LINE__);
        }
        $this->AddonType = $addonType;
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
     * @return \StructType\AddonType
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
     * @return \StructType\AddonType
     */
    public function setCredentials(\StructType\CredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get Comments value
     * @return \StructType\CommentList|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \StructType\CommentList $comments
     * @return \StructType\AddonType
     */
    public function setComments(\StructType\CommentList $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get Params value
     * @return \StructType\ParamList|null
     */
    public function getParams()
    {
        return $this->Params;
    }
    /**
     * Set Params value
     * @param \StructType\ParamList $params
     * @return \StructType\AddonType
     */
    public function setParams(\StructType\ParamList $params = null)
    {
        $this->Params = $params;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddonType
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
