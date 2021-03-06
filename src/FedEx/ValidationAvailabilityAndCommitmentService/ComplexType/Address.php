<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service
 */
class Address
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PostalCode' => 'string',
'CountryCode' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Address';

        
    /**
     * @var string
     */
    public $PostalCode;

        
    /**
     * @var string
     */
    public $CountryCode;



    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->__set('PostalCode', $postalCode);
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    
    /**
     * The two-letter code used to identify a country.
     *
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->__set('CountryCode', $countryCode);
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns The two-letter code used to identify a country.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    

    
}