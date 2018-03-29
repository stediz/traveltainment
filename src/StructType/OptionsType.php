<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionsType StructType
 * @subpackage Structs
 */
class OptionsType extends AbstractStructBase
{
    /**
     * The ResultsPerPage
     * Meta informations extracted from the WSDL
     * - default: 20
     * @var int
     */
    public $ResultsPerPage;
    /**
     * The ResultOffset
     * Meta informations extracted from the WSDL
     * - default: 0
     * @var int
     */
    public $ResultOffset;
    /**
     * The TeaserOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TeaserOptionsType
     */
    public $TeaserOptions;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var int
     */
    public $Offset;
    /**
     * The NumberOfResults
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minInclusive: 0
     * @var int
     */
    public $NumberOfResults;
    /**
     * Constructor method for OptionsType
     * @uses OptionsType::setResultsPerPage()
     * @uses OptionsType::setResultOffset()
     * @uses OptionsType::setTeaserOptions()
     * @uses OptionsType::setAdditionalCurrencies()
     * @uses OptionsType::setOffset()
     * @uses OptionsType::setNumberOfResults()
     * @param int $resultsPerPage
     * @param int $resultOffset
     * @param \StructType\TeaserOptionsType $teaserOptions
     * @param string $additionalCurrencies
     * @param int $offset
     * @param int $numberOfResults
     */
    public function __construct($resultsPerPage = 20, $resultOffset = 0, \StructType\TeaserOptionsType $teaserOptions = null, $additionalCurrencies = null, $offset = null, $numberOfResults = null)
    {
        $this
            ->setResultsPerPage($resultsPerPage)
            ->setResultOffset($resultOffset)
            ->setTeaserOptions($teaserOptions)
            ->setAdditionalCurrencies($additionalCurrencies)
            ->setOffset($offset)
            ->setNumberOfResults($numberOfResults);
    }
    /**
     * Get ResultsPerPage value
     * @return int|null
     */
    public function getResultsPerPage()
    {
        return $this->ResultsPerPage;
    }
    /**
     * Set ResultsPerPage value
     * @param int $resultsPerPage
     * @return \StructType\OptionsType
     */
    public function setResultsPerPage($resultsPerPage = 20)
    {
        // validation for constraint: int
        if (!is_null($resultsPerPage) && !is_numeric($resultsPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultsPerPage)), __LINE__);
        }
        $this->ResultsPerPage = $resultsPerPage;
        return $this;
    }
    /**
     * Get ResultOffset value
     * @return int|null
     */
    public function getResultOffset()
    {
        return $this->ResultOffset;
    }
    /**
     * Set ResultOffset value
     * @param int $resultOffset
     * @return \StructType\OptionsType
     */
    public function setResultOffset($resultOffset = 0)
    {
        // validation for constraint: int
        if (!is_null($resultOffset) && !is_numeric($resultOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultOffset)), __LINE__);
        }
        $this->ResultOffset = $resultOffset;
        return $this;
    }
    /**
     * Get TeaserOptions value
     * @return \StructType\TeaserOptionsType|null
     */
    public function getTeaserOptions()
    {
        return $this->TeaserOptions;
    }
    /**
     * Set TeaserOptions value
     * @param \StructType\TeaserOptionsType $teaserOptions
     * @return \StructType\OptionsType
     */
    public function setTeaserOptions(\StructType\TeaserOptionsType $teaserOptions = null)
    {
        $this->TeaserOptions = $teaserOptions;
        return $this;
    }
    /**
     * Get AdditionalCurrencies value
     * @return string|null
     */
    public function getAdditionalCurrencies()
    {
        return $this->AdditionalCurrencies;
    }
    /**
     * Set AdditionalCurrencies value
     * @param string $additionalCurrencies
     * @return \StructType\OptionsType
     */
    public function setAdditionalCurrencies($additionalCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($additionalCurrencies) && !is_string($additionalCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalCurrencies)), __LINE__);
        }
        $this->AdditionalCurrencies = $additionalCurrencies;
        return $this;
    }
    /**
     * Get Offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \StructType\OptionsType
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: minInclusive
        if ($offset < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $offset), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($offset) && !is_numeric($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get NumberOfResults value
     * @return int|null
     */
    public function getNumberOfResults()
    {
        return $this->NumberOfResults;
    }
    /**
     * Set NumberOfResults value
     * @param int $numberOfResults
     * @return \StructType\OptionsType
     */
    public function setNumberOfResults($numberOfResults = null)
    {
        // validation for constraint: minInclusive
        if ($numberOfResults < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberOfResults), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberOfResults) && !is_numeric($numberOfResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfResults)), __LINE__);
        }
        $this->NumberOfResults = $numberOfResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OptionsType
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
