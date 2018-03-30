<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Offer3pType StructType
 * @subpackage Structs
 */
class Offer3pType extends AbstractStructBase
{
    /**
     * The OfferID
     * Meta informations extracted from the WSDL
     * - documentation: Identifiziert ein Angebot und wird bei der Buchung und späteren Zugriffen auf Buchungsdaten als Referenz verwendet.
     * @var string
     */
    public $OfferID;
    /**
     * The OfferEffectiveDate
     * Meta informations extracted from the WSDL
     * - documentation: Angebot gilt ab diesem Datum.
     * - minOccurs: 0
     * @var string
     */
    public $OfferEffectiveDate;
    /**
     * The OfferExpireDate
     * Meta informations extracted from the WSDL
     * - documentation: Angebot gilt bis zu diesem Datum.
     * - minOccurs: 0
     * @var string
     */
    public $OfferExpireDate;
    /**
     * The IsPreferredOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPreferredOffer;
    /**
     * The Description
     * @var \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public $Description;
    /**
     * The OfferCost
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $OfferCost;
    /**
     * The ExtendedOfferCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $ExtendedOfferCost;
    /**
     * The AvailablePayments
     * @var \traveltainment\SOAP17\StructType\PaymentTypesType
     */
    public $AvailablePayments;
    /**
     * The Underwriter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\UnderwriterType
     */
    public $Underwriter;
    /**
     * The TermsAndConditionsURL
     * @var string
     */
    public $TermsAndConditionsURL;
    /**
     * Constructor method for Offer3pType
     * @uses Offer3pType::setOfferID()
     * @uses Offer3pType::setOfferEffectiveDate()
     * @uses Offer3pType::setOfferExpireDate()
     * @uses Offer3pType::setIsPreferredOffer()
     * @uses Offer3pType::setDescription()
     * @uses Offer3pType::setOfferCost()
     * @uses Offer3pType::setExtendedOfferCost()
     * @uses Offer3pType::setAvailablePayments()
     * @uses Offer3pType::setUnderwriter()
     * @uses Offer3pType::setTermsAndConditionsURL()
     * @param string $offerID
     * @param string $offerEffectiveDate
     * @param string $offerExpireDate
     * @param bool $isPreferredOffer
     * @param \traveltainment\SOAP17\StructType\Offer3pDescription $description
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     * @param \traveltainment\SOAP17\StructType\UnderwriterType $underwriter
     * @param string $termsAndConditionsURL
     */
    public function __construct($offerID = null, $offerEffectiveDate = null, $offerExpireDate = null, $isPreferredOffer = null, \traveltainment\SOAP17\StructType\Offer3pDescription $description = null, \traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null, \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost = null, \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null, \traveltainment\SOAP17\StructType\UnderwriterType $underwriter = null, $termsAndConditionsURL = null)
    {
        $this
            ->setOfferID($offerID)
            ->setOfferEffectiveDate($offerEffectiveDate)
            ->setOfferExpireDate($offerExpireDate)
            ->setIsPreferredOffer($isPreferredOffer)
            ->setDescription($description)
            ->setOfferCost($offerCost)
            ->setExtendedOfferCost($extendedOfferCost)
            ->setAvailablePayments($availablePayments)
            ->setUnderwriter($underwriter)
            ->setTermsAndConditionsURL($termsAndConditionsURL);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get OfferEffectiveDate value
     * @return string|null
     */
    public function getOfferEffectiveDate()
    {
        return $this->OfferEffectiveDate;
    }
    /**
     * Set OfferEffectiveDate value
     * @param string $offerEffectiveDate
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setOfferEffectiveDate($offerEffectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($offerEffectiveDate) && !is_string($offerEffectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerEffectiveDate)), __LINE__);
        }
        $this->OfferEffectiveDate = $offerEffectiveDate;
        return $this;
    }
    /**
     * Get OfferExpireDate value
     * @return string|null
     */
    public function getOfferExpireDate()
    {
        return $this->OfferExpireDate;
    }
    /**
     * Set OfferExpireDate value
     * @param string $offerExpireDate
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setOfferExpireDate($offerExpireDate = null)
    {
        // validation for constraint: string
        if (!is_null($offerExpireDate) && !is_string($offerExpireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerExpireDate)), __LINE__);
        }
        $this->OfferExpireDate = $offerExpireDate;
        return $this;
    }
    /**
     * Get IsPreferredOffer value
     * @return bool|null
     */
    public function getIsPreferredOffer()
    {
        return $this->IsPreferredOffer;
    }
    /**
     * Set IsPreferredOffer value
     * @param bool $isPreferredOffer
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setIsPreferredOffer($isPreferredOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPreferredOffer) && !is_bool($isPreferredOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPreferredOffer)), __LINE__);
        }
        $this->IsPreferredOffer = $isPreferredOffer;
        return $this;
    }
    /**
     * Get Description value
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \traveltainment\SOAP17\StructType\Offer3pDescription $description
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setDescription(\traveltainment\SOAP17\StructType\Offer3pDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get OfferCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getOfferCost()
    {
        return $this->OfferCost;
    }
    /**
     * Set OfferCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $offerCost
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setOfferCost(\traveltainment\SOAP17\StructType\SimplePriceType $offerCost = null)
    {
        $this->OfferCost = $offerCost;
        return $this;
    }
    /**
     * Get ExtendedOfferCost value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getExtendedOfferCost()
    {
        return $this->ExtendedOfferCost;
    }
    /**
     * Set ExtendedOfferCost value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setExtendedOfferCost(\traveltainment\SOAP17\StructType\PriceInformationType $extendedOfferCost = null)
    {
        $this->ExtendedOfferCost = $extendedOfferCost;
        return $this;
    }
    /**
     * Get AvailablePayments value
     * @return \traveltainment\SOAP17\StructType\PaymentTypesType|null
     */
    public function getAvailablePayments()
    {
        return $this->AvailablePayments;
    }
    /**
     * Set AvailablePayments value
     * @param \traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setAvailablePayments(\traveltainment\SOAP17\StructType\PaymentTypesType $availablePayments = null)
    {
        $this->AvailablePayments = $availablePayments;
        return $this;
    }
    /**
     * Get Underwriter value
     * @return \traveltainment\SOAP17\StructType\UnderwriterType|null
     */
    public function getUnderwriter()
    {
        return $this->Underwriter;
    }
    /**
     * Set Underwriter value
     * @param \traveltainment\SOAP17\StructType\UnderwriterType $underwriter
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setUnderwriter(\traveltainment\SOAP17\StructType\UnderwriterType $underwriter = null)
    {
        $this->Underwriter = $underwriter;
        return $this;
    }
    /**
     * Get TermsAndConditionsURL value
     * @return string|null
     */
    public function getTermsAndConditionsURL()
    {
        return $this->TermsAndConditionsURL;
    }
    /**
     * Set TermsAndConditionsURL value
     * @param string $termsAndConditionsURL
     * @return \traveltainment\SOAP17\StructType\Offer3pType
     */
    public function setTermsAndConditionsURL($termsAndConditionsURL = null)
    {
        // validation for constraint: string
        if (!is_null($termsAndConditionsURL) && !is_string($termsAndConditionsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($termsAndConditionsURL)), __LINE__);
        }
        $this->TermsAndConditionsURL = $termsAndConditionsURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\Offer3pType
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
