<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the representation of human-readable text.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class Localization
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LanguageCode' => 'string',
'LocaleCode' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Localization';

        
    /**
     * @var string
     */
    public $LanguageCode;

        
    /**
     * @var string
     */
    public $LocaleCode;



    /**
     * Two-letter code for language (e.g. EN, FR, etc.)
     *
     * @param string $languageCode
     * @return Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->__set('LanguageCode', $languageCode);
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Returns Two-letter code for language (e.g. EN, FR, etc.)
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    
    /**
     * Two-letter code for the region (e.g. us, ca, etc..).
     *
     * @param string $localeCode
     * @return Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->__set('LocaleCode', $localeCode);
        $this->LocaleCode = $localeCode;
        return $this;
    }
    
    /**
     * Returns Two-letter code for the region (e.g. us, ca, etc..).
     *
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    

    
}