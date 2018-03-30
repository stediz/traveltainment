<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlagsType StructType
 * @subpackage Structs
 */
class FlagsType extends AbstractStructBase
{
    /**
     * The ShowResultSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ShowResultSummary;
    /**
     * The HardSearch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HardSearch;
    /**
     * The ShowAll
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ShowAll;
    /**
     * Constructor method for FlagsType
     * @uses FlagsType::setShowResultSummary()
     * @uses FlagsType::setHardSearch()
     * @uses FlagsType::setShowAll()
     * @param bool $showResultSummary
     * @param bool $hardSearch
     * @param bool $showAll
     */
    public function __construct($showResultSummary = null, $hardSearch = null, $showAll = null)
    {
        $this
            ->setShowResultSummary($showResultSummary)
            ->setHardSearch($hardSearch)
            ->setShowAll($showAll);
    }
    /**
     * Get ShowResultSummary value
     * @return bool|null
     */
    public function getShowResultSummary()
    {
        return $this->ShowResultSummary;
    }
    /**
     * Set ShowResultSummary value
     * @param bool $showResultSummary
     * @return \traveltainment\SOAP17\StructType\FlagsType
     */
    public function setShowResultSummary($showResultSummary = null)
    {
        // validation for constraint: boolean
        if (!is_null($showResultSummary) && !is_bool($showResultSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showResultSummary)), __LINE__);
        }
        $this->ShowResultSummary = $showResultSummary;
        return $this;
    }
    /**
     * Get HardSearch value
     * @return bool|null
     */
    public function getHardSearch()
    {
        return $this->HardSearch;
    }
    /**
     * Set HardSearch value
     * @param bool $hardSearch
     * @return \traveltainment\SOAP17\StructType\FlagsType
     */
    public function setHardSearch($hardSearch = null)
    {
        // validation for constraint: boolean
        if (!is_null($hardSearch) && !is_bool($hardSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hardSearch)), __LINE__);
        }
        $this->HardSearch = $hardSearch;
        return $this;
    }
    /**
     * Get ShowAll value
     * @return bool|null
     */
    public function getShowAll()
    {
        return $this->ShowAll;
    }
    /**
     * Set ShowAll value
     * @param bool $showAll
     * @return \traveltainment\SOAP17\StructType\FlagsType
     */
    public function setShowAll($showAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($showAll) && !is_bool($showAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showAll)), __LINE__);
        }
        $this->ShowAll = $showAll;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\FlagsType
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
