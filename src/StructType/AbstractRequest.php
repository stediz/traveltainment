<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Der AbstractRequest ist die Basisklasse aller Requesttypes der Xml.
 * @subpackage Structs
 */
abstract class AbstractRequest extends AbstractMessage
{
    /**
     * The ClientIP
     * Meta informations extracted from the WSDL
     * - documentation: In der ClientIP kann der Benutzer der TTXml die IP des urspruenglich Anfragenden an die TTXml schicken. Diese Information erscheint dann in den Logs und man kann zusaetzlich zu den anderen Trackingoptionen einen Endbenutzer
     * verfolgen. Hier ist eventuell fraglich, ob die IP ueberhaupt geloggt werden darf?
     * - use: optional
     * @var string
     */
    public $ClientIP;
    /**
     * Constructor method for AbstractRequest
     * @uses AbstractRequest::setClientIP()
     * @param string $clientIP
     */
    public function __construct($clientIP = null)
    {
        $this
            ->setClientIP($clientIP);
    }
    /**
     * Get ClientIP value
     * @return string|null
     */
    public function getClientIP()
    {
        return $this->ClientIP;
    }
    /**
     * Set ClientIP value
     * @param string $clientIP
     * @return \traveltainment\SOAP17\StructType\AbstractRequest
     */
    public function setClientIP($clientIP = null)
    {
        // validation for constraint: string
        if (!is_null($clientIP) && !is_string($clientIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientIP)), __LINE__);
        }
        $this->ClientIP = $clientIP;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AbstractRequest
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
