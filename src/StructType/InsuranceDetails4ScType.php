<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceDetails4ScType StructType
 * @subpackage Structs
 */
class InsuranceDetails4ScType extends AbstractStructBase
{
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
     * Constructor method for InsuranceDetails4ScType
     * @uses InsuranceDetails4ScType::setProductName()
     * @uses InsuranceDetails4ScType::setCoverageDetail()
     * @param string $productName
     * @param \traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail
     */
    public function __construct($productName = null, \traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail = null)
    {
        $this
            ->setProductName($productName)
            ->setCoverageDetail($coverageDetail);
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
     * @return \traveltainment\SOAP17\StructType\InsuranceDetails4ScType
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
     * @return \traveltainment\SOAP17\StructType\InsuranceDetails4ScType
     */
    public function setCoverageDetail(\traveltainment\SOAP17\StructType\CoverageDetailType $coverageDetail = null)
    {
        $this->CoverageDetail = $coverageDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\InsuranceDetails4ScType
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
