<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Offer3pDescription StructType
 * @subpackage Structs
 */
class Offer3pDescription extends AbstractStructBase
{
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: Quelle: - falls Kontext "InsuranceOffer": OTA_TT_InsurancePlanSearchRS/AvailablePlans/AvailablePlan/PlanDetail/PlanDescription/@Title.
     * @var string
     */
    public $Title;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Quelle: - falls Kontext "InsuranceOffer": OTA_TT_InsurancePlanSearchRS/AvailablePlans/AvailablePlan/@Name.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TeaserText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TeaserText;
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Detail;
    /**
     * The DetailURL
     * Meta informations extracted from the WSDL
     * - documentation: Quelle: - falls Kontext "InsuranceOffer": OTA_TT_InsurancePlanSearchRS/AvailablePlans/AvailablePlan/PlanDetail/PlanDescription/SubSection/Paragraph/URL.
     * - minOccurs: 0
     * @var string
     */
    public $DetailURL;
    /**
     * The ProductImgURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ImageType
     */
    public $ProductImgURL;
    /**
     * Constructor method for Offer3pDescription
     * @uses Offer3pDescription::setTitle()
     * @uses Offer3pDescription::setName()
     * @uses Offer3pDescription::setTeaserText()
     * @uses Offer3pDescription::setDetail()
     * @uses Offer3pDescription::setDetailURL()
     * @uses Offer3pDescription::setProductImgURL()
     * @param string $title
     * @param string $name
     * @param string $teaserText
     * @param string $detail
     * @param string $detailURL
     * @param \traveltainment\SOAP17\StructType\ImageType $productImgURL
     */
    public function __construct($title = null, $name = null, $teaserText = null, $detail = null, $detailURL = null, \traveltainment\SOAP17\StructType\ImageType $productImgURL = null)
    {
        $this
            ->setTitle($title)
            ->setName($name)
            ->setTeaserText($teaserText)
            ->setDetail($detail)
            ->setDetailURL($detailURL)
            ->setProductImgURL($productImgURL);
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get TeaserText value
     * @return string|null
     */
    public function getTeaserText()
    {
        return $this->TeaserText;
    }
    /**
     * Set TeaserText value
     * @param string $teaserText
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setTeaserText($teaserText = null)
    {
        // validation for constraint: string
        if (!is_null($teaserText) && !is_string($teaserText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($teaserText)), __LINE__);
        }
        $this->TeaserText = $teaserText;
        return $this;
    }
    /**
     * Get Detail value
     * @return string|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @param string $detail
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setDetail($detail = null)
    {
        // validation for constraint: string
        if (!is_null($detail) && !is_string($detail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detail)), __LINE__);
        }
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Get DetailURL value
     * @return string|null
     */
    public function getDetailURL()
    {
        return $this->DetailURL;
    }
    /**
     * Set DetailURL value
     * @param string $detailURL
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setDetailURL($detailURL = null)
    {
        // validation for constraint: string
        if (!is_null($detailURL) && !is_string($detailURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailURL)), __LINE__);
        }
        $this->DetailURL = $detailURL;
        return $this;
    }
    /**
     * Get ProductImgURL value
     * @return \traveltainment\SOAP17\StructType\ImageType|null
     */
    public function getProductImgURL()
    {
        return $this->ProductImgURL;
    }
    /**
     * Set ProductImgURL value
     * @param \traveltainment\SOAP17\StructType\ImageType $productImgURL
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
     */
    public function setProductImgURL(\traveltainment\SOAP17\StructType\ImageType $productImgURL = null)
    {
        $this->ProductImgURL = $productImgURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\Offer3pDescription
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
