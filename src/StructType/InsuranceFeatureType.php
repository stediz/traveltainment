<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceFeatureType StructType
 * @subpackage Structs
 */
class InsuranceFeatureType extends AbstractStructBase
{
    /**
     * The FeatureID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $FeatureID;
    /**
     * The FeatureName
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FeatureName;
    /**
     * The FeatueURL
     * @var string
     */
    public $FeatueURL;
    /**
     * Constructor method for InsuranceFeatureType
     * @uses InsuranceFeatureType::setFeatureID()
     * @uses InsuranceFeatureType::setFeatureName()
     * @uses InsuranceFeatureType::setFeatueURL()
     * @param int $featureID
     * @param string $featureName
     * @param string $featueURL
     */
    public function __construct($featureID = null, $featureName = null, $featueURL = null)
    {
        $this
            ->setFeatureID($featureID)
            ->setFeatureName($featureName)
            ->setFeatueURL($featueURL);
    }
    /**
     * Get FeatureID value
     * @return int
     */
    public function getFeatureID()
    {
        return $this->FeatureID;
    }
    /**
     * Set FeatureID value
     * @param int $featureID
     * @return \StructType\InsuranceFeatureType
     */
    public function setFeatureID($featureID = null)
    {
        // validation for constraint: int
        if (!is_null($featureID) && !is_numeric($featureID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($featureID)), __LINE__);
        }
        $this->FeatureID = $featureID;
        return $this;
    }
    /**
     * Get FeatureName value
     * @return string
     */
    public function getFeatureName()
    {
        return $this->FeatureName;
    }
    /**
     * Set FeatureName value
     * @param string $featureName
     * @return \StructType\InsuranceFeatureType
     */
    public function setFeatureName($featureName = null)
    {
        // validation for constraint: string
        if (!is_null($featureName) && !is_string($featureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($featureName)), __LINE__);
        }
        $this->FeatureName = $featureName;
        return $this;
    }
    /**
     * Get FeatueURL value
     * @return string|null
     */
    public function getFeatueURL()
    {
        return $this->FeatueURL;
    }
    /**
     * Set FeatueURL value
     * @param string $featueURL
     * @return \StructType\InsuranceFeatureType
     */
    public function setFeatueURL($featueURL = null)
    {
        // validation for constraint: string
        if (!is_null($featueURL) && !is_string($featueURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($featueURL)), __LINE__);
        }
        $this->FeatueURL = $featueURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InsuranceFeatureType
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
