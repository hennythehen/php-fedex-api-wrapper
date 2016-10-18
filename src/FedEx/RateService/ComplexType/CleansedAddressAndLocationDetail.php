<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CleansedAddressAndLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CleansedAddressAndLocationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CountryCode' => 'string',
'StateOrProvinceCode' => 'string',
'PostalCode' => 'string',
'ServiceArea' => 'string',
'LocationId' => 'string',
'LocationNumber' => 'int',
'AirportId' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CleansedAddressAndLocationDetail';

        
    /**
     * @var string
     */
    public $CountryCode;

        
    /**
     * @var string
     */
    public $StateOrProvinceCode;

        
    /**
     * @var string
     */
    public $PostalCode;

        
    /**
     * @var string
     */
    public $ServiceArea;

        
    /**
     * @var string
     */
    public $LocationId;

        
    /**
     * @var int
     */
    public $LocationNumber;

        
    /**
     * @var string
     */
    public $AirportId;



    /**
     * This represents the internal FedEx-system recognized country code.
     *
     * @param string $countryCode
     * @return CleansedAddressAndLocationDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->__set('CountryCode', $countryCode);
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns This represents the internal FedEx-system recognized country code.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * This represents the internal FedEx-system recognized state or province code.
     *
     * @param string $stateOrProvinceCode
     * @return CleansedAddressAndLocationDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->__set('StateOrProvinceCode', $stateOrProvinceCode);
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns This represents the internal FedEx-system recognized state or province code.
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * This represents the internal FedEx-system recognized postal code.
     *
     * @param string $postalCode
     * @return CleansedAddressAndLocationDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->__set('PostalCode', $postalCode);
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns This represents the internal FedEx-system recognized postal code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    
    /**
     * Set ServiceArea
     *
     * @param string $serviceArea
     * @return CleansedAddressAndLocationDetail
     */
    public function setServiceArea($serviceArea)
    {
        $this->__set('ServiceArea', $serviceArea);
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    
    /**
     * Returns Set ServiceArea
     *
     * @return string
     */
    public function getServiceArea()
    {
        return $this->ServiceArea;
    }
    
    /**
     * The unique location identifier
     *
     * @param string $locationId
     * @return CleansedAddressAndLocationDetail
     */
    public function setLocationId($locationId)
    {
        $this->__set('LocationId', $locationId);
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Returns The unique location identifier
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    
    /**
     * The op-co specific numeric identifier for a location
     *
     * @param int $locationNumber
     * @return CleansedAddressAndLocationDetail
     */
    public function setLocationNumber($locationNumber)
    {
        $this->__set('LocationNumber', $locationNumber);
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    
    /**
     * Returns The op-co specific numeric identifier for a location
     *
     * @return int
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    
    /**
     * Set AirportId
     *
     * @param string $airportId
     * @return CleansedAddressAndLocationDetail
     */
    public function setAirportId($airportId)
    {
        $this->__set('AirportId', $airportId);
        $this->AirportId = $airportId;
        return $this;
    }
    
    /**
     * Returns Set AirportId
     *
     * @return string
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    

    
}