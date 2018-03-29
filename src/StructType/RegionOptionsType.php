<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionOptionsType StructType
 * @subpackage Structs
 */
class RegionOptionsType extends AbstractStructBase
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
     * The PostsortingSelection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionPostsortingSelectionType
     */
    public $PostsortingSelection;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for RegionOptionsType
     * @uses RegionOptionsType::setResultsPerPage()
     * @uses RegionOptionsType::setResultOffset()
     * @uses RegionOptionsType::setTeaserOptions()
     * @uses RegionOptionsType::setPostsortingSelection()
     * @uses RegionOptionsType::setAdditionalCurrencies()
     * @param int $resultsPerPage
     * @param int $resultOffset
     * @param \StructType\TeaserOptionsType $teaserOptions
     * @param \StructType\RegionPostsortingSelectionType $postsortingSelection
     * @param string $additionalCurrencies
     */
    public function __construct($resultsPerPage = 20, $resultOffset = 0, \StructType\TeaserOptionsType $teaserOptions = null, \StructType\RegionPostsortingSelectionType $postsortingSelection = null, $additionalCurrencies = null)
    {
        $this
            ->setResultsPerPage($resultsPerPage)
            ->setResultOffset($resultOffset)
            ->setTeaserOptions($teaserOptions)
            ->setPostsortingSelection($postsortingSelection)
            ->setAdditionalCurrencies($additionalCurrencies);
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
     * @return \StructType\RegionOptionsType
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
     * @return \StructType\RegionOptionsType
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
     * @return \StructType\RegionOptionsType
     */
    public function setTeaserOptions(\StructType\TeaserOptionsType $teaserOptions = null)
    {
        $this->TeaserOptions = $teaserOptions;
        return $this;
    }
    /**
     * Get PostsortingSelection value
     * @return \StructType\RegionPostsortingSelectionType|null
     */
    public function getPostsortingSelection()
    {
        return $this->PostsortingSelection;
    }
    /**
     * Set PostsortingSelection value
     * @param \StructType\RegionPostsortingSelectionType $postsortingSelection
     * @return \StructType\RegionOptionsType
     */
    public function setPostsortingSelection(\StructType\RegionPostsortingSelectionType $postsortingSelection = null)
    {
        $this->PostsortingSelection = $postsortingSelection;
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
     * @return \StructType\RegionOptionsType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegionOptionsType
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
