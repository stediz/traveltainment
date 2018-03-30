<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnderwriterType StructType
 * @subpackage Structs
 */
class UnderwriterType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The ShortName
     * @var string
     */
    public $ShortName;
    /**
     * The LogoURL
     * @var string
     */
    public $LogoURL;
    /**
     * Constructor method for UnderwriterType
     * @uses UnderwriterType::set_()
     * @uses UnderwriterType::setShortName()
     * @uses UnderwriterType::setLogoURL()
     * @param string $_
     * @param string $shortName
     * @param string $logoURL
     */
    public function __construct($_ = null, $shortName = null, $logoURL = null)
    {
        $this
            ->set_($_)
            ->setShortName($shortName)
            ->setLogoURL($logoURL);
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
     * @return \traveltainment\SOAP17\StructType\UnderwriterType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ShortName value
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }
    /**
     * Set ShortName value
     * @param string $shortName
     * @return \traveltainment\SOAP17\StructType\UnderwriterType
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        $this->ShortName = $shortName;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \traveltainment\SOAP17\StructType\UnderwriterType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\UnderwriterType
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
