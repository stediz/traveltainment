<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - maxLength: 16384
 * @subpackage Structs
 */
class CommentDefinitionType extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Category;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxLength: 16384
     * @var string
     */
    public $_;
    /**
     * The TravelAgent
     * Meta informations extracted from the WSDL
     * - maxLength: 128
     * @var string
     */
    public $TravelAgent;
    /**
     * The Date
     * @var string
     */
    public $Date;
    /**
     * The UID
     * @var string
     */
    public $UID;
    /**
     * The Username
     * @var string
     */
    public $Username;
    /**
     * Constructor method for CommentDefinitionType
     * @uses CommentDefinitionType::setCategory()
     * @uses CommentDefinitionType::setType()
     * @uses CommentDefinitionType::set_()
     * @uses CommentDefinitionType::setTravelAgent()
     * @uses CommentDefinitionType::setDate()
     * @uses CommentDefinitionType::setUID()
     * @uses CommentDefinitionType::setUsername()
     * @param string $category
     * @param string $type
     * @param string $_
     * @param string $travelAgent
     * @param string $date
     * @param string $uID
     * @param string $username
     */
    public function __construct($category = null, $type = null, $_ = null, $travelAgent = null, $date = null, $uID = null, $username = null)
    {
        $this
            ->setCategory($category)
            ->setType($type)
            ->set_($_)
            ->setTravelAgent($travelAgent)
            ->setDate($date)
            ->setUID($uID)
            ->setUsername($username);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \traveltainment\SOAP17\EnumType\CommentCategoryType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CommentCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CommentCategoryType::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \traveltainment\SOAP17\EnumType\CommentCategoryType::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \traveltainment\SOAP17\EnumType\CommentType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CommentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CommentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \traveltainment\SOAP17\EnumType\CommentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 16384) || (is_array($_) && count($_) > 16384)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16384 element(s) or a scalar of 16384 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get TravelAgent value
     * @return string|null
     */
    public function getTravelAgent()
    {
        return $this->TravelAgent;
    }
    /**
     * Set TravelAgent value
     * @param string $travelAgent
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setTravelAgent($travelAgent = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($travelAgent) && strlen($travelAgent) > 128) || (is_array($travelAgent) && count($travelAgent) > 128)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 128 element(s) or a scalar of 128 character(s) at most, "%d" length given', is_scalar($travelAgent) ? strlen($travelAgent) : count($travelAgent)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($travelAgent) && !is_string($travelAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelAgent)), __LINE__);
        }
        $this->TravelAgent = $travelAgent;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setUID($uID = null)
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType
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
