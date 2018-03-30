<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceDataType StructType
 * @subpackage Structs
 */
class InsuranceDataType extends AbstractStructBase
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The ProductName
     * @var string
     */
    public $ProductName;
    /**
     * The CoverageDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CoverageDetailType
     */
    public $CoverageDetail;
    /**
     * The InsuranceCost
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $InsuranceCost;
    /**
     * Constructor method for InsuranceDataType
     * @uses InsuranceDataType::setProviderID()
     * @uses InsuranceDataType::setProductName()
     * @uses InsuranceDataType::setCoverageDetail()
     * @uses InsuranceDataType::setInsuranceCost()
     * @param string $providerID
     * @param string $productName
     * @param \traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $insuranceCost
     */
    public function __construct($providerID = null, $productName = null, \traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail = null, \traveltainment\SOAP17\StructType\SimplePriceType $insuranceCost = null)
    {
        $this
            ->setProviderID($providerID)
            ->setProductName($productName)
            ->setCoverageDetail($coverageDetail)
            ->setInsuranceCost($insuranceCost);
    }
    /**
     * Get ProviderID value
     * @return string|null
     */
    public function getProviderID()
    {
        return $this->ProviderID;
    }
    /**
     * Set ProviderID value
     * @param string $providerID
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType
     */
    public function setProviderID($providerID = null)
    {
        // validation for constraint: string
        if (!is_null($providerID) && !is_string($providerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerID)), __LINE__);
        }
        $this->ProviderID = $providerID;
        return $this;
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
        return $this;
    }
    /**
     * Get CoverageDetail value
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType|null
     */
    public function getCoverageDetail()
    {
        return $this->CoverageDetail;
    }
    /**
     * Set CoverageDetail value
     * @param \traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType
     */
    public function setCoverageDetail(\traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail = null)
    {
        $this->CoverageDetail = $coverageDetail;
        return $this;
    }
    /**
     * Get InsuranceCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getInsuranceCost()
    {
        return $this->InsuranceCost;
    }
    /**
     * Set InsuranceCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $insuranceCost
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType
     */
    public function setInsuranceCost(\traveltainment\SOAP17\StructType\SimplePriceType $insuranceCost = null)
    {
        $this->InsuranceCost = $insuranceCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\InsuranceDataType
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
