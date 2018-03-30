<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XmlPaymentDescriptionType StructType
 * @subpackage Structs
 */
class XmlPaymentDescriptionType extends PaymentDescriptionType
{
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\SurchargeType
     */
    public $Surcharge;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Label;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Token;
    /**
     * Constructor method for XmlPaymentDescriptionType
     * @uses XmlPaymentDescriptionType::setSurcharge()
     * @uses XmlPaymentDescriptionType::setLabel()
     * @uses XmlPaymentDescriptionType::setId()
     * @uses XmlPaymentDescriptionType::setToken()
     * @param \traveltainment\SOAP17\StructType\SurchargeType $surcharge
     * @param string $label
     * @param string $id
     * @param string $token
     */
    public function __construct(\traveltainment\SOAP17\StructType\SurchargeType $surcharge = null, $label = null, $id = null, $token = null)
    {
        $this
            ->setSurcharge($surcharge)
            ->setLabel($label)
            ->setId($id)
            ->setToken($token);
    }
    /**
     * Get Surcharge value
     * @return \traveltainment\SOAP17\StructType\SurchargeType|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param \traveltainment\SOAP17\StructType\SurchargeType $surcharge
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType
     */
    public function setSurcharge(\traveltainment\SOAP17\StructType\SurchargeType $surcharge = null)
    {
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($label)), __LINE__);
        }
        $this->Label = $label;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\XmlPaymentDescriptionType
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
