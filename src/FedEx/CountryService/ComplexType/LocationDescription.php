<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * LocationDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 */
class LocationDescription
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'LocationId' => 'string',
'LocationNumber' => 'int',
'CountryCode' => 'string',
'StateOrProvinceCode' => 'string',
'PostalCode' => 'string',
'ServiceArea' => 'string',
'AirportId' => 'string',
'RestrictedPackageSpecialServices' => 'PackageSpecialServiceType',
'RestrictedShipmentSpecialServices' => 'ShipmentSpecialServiceType',
'FedExEuropeFirstOrigin' => 'boolean',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'LocationDescription';

        
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
    public $AirportId;

        
    /**
     * @var PackageSpecialServiceType[]
     */
    public $RestrictedPackageSpecialServices = array();

        
    /**
     * @var ShipmentSpecialServiceType[]
     */
    public $RestrictedShipmentSpecialServices = array();

        
    /**
     * @var boolean
     */
    public $FedExEuropeFirstOrigin;



    /**
     * Set LocationId
     *
     * @param string $locationId
     * @return LocationDescription
     */
    public function setLocationId($locationId)
    {
        $this->__set('LocationId', $locationId);
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * Returns Set LocationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    
    /**
     * Set LocationNumber
     *
     * @param int $locationNumber
     * @return LocationDescription
     */
    public function setLocationNumber($locationNumber)
    {
        $this->__set('LocationNumber', $locationNumber);
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    
    /**
     * Returns Set LocationNumber
     *
     * @return int
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    
    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return LocationDescription
     */
    public function setCountryCode($countryCode)
    {
        $this->__set('CountryCode', $countryCode);
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Returns Set CountryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    
    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return LocationDescription
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->__set('StateOrProvinceCode', $stateOrProvinceCode);
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Returns Set StateOrProvinceCode
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    
    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * @return LocationDescription
     */
    public function setPostalCode($postalCode)
    {
        $this->__set('PostalCode', $postalCode);
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Returns Set PostalCode
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
     * @return LocationDescription
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
     * Set AirportId
     *
     * @param string $airportId
     * @return LocationDescription
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
    
    /**
     * Package special services prohibited for this location for operational reasons. (Other package special services may or may not be available per shipment for other reasons.)
     *
     * @param PackageSpecialServiceType[] $restrictedPackageSpecialServices
     * @return LocationDescription
     */
    public function setRestrictedPackageSpecialServices(array $restrictedPackageSpecialServices)
    {
        $this->__set('RestrictedPackageSpecialServices', $restrictedPackageSpecialServices);
        $this->RestrictedPackageSpecialServices = $restrictedPackageSpecialServices;
        return $this;
    }
    
    /**
     * Returns Package special services prohibited for this location for operational reasons. (Other package special services may or may not be available per shipment for other reasons.)
     *
     * @return PackageSpecialServiceType[]
     */
    public function getRestrictedPackageSpecialServices()
    {
        return $this->RestrictedPackageSpecialServices;
    }
    
    /**
     * Shipment special services prohibited for this location for operational reasons. (Other shipment special services may or may not be available per shipment for other reasons.)
     *
     * @param ShipmentSpecialServiceType[] $restrictedShipmentSpecialServices
     * @return LocationDescription
     */
    public function setRestrictedShipmentSpecialServices(array $restrictedShipmentSpecialServices)
    {
        $this->__set('RestrictedShipmentSpecialServices', $restrictedShipmentSpecialServices);
        $this->RestrictedShipmentSpecialServices = $restrictedShipmentSpecialServices;
        return $this;
    }
    
    /**
     * Returns Shipment special services prohibited for this location for operational reasons. (Other shipment special services may or may not be available per shipment for other reasons.)
     *
     * @return ShipmentSpecialServiceType[]
     */
    public function getRestrictedShipmentSpecialServices()
    {
        return $this->RestrictedShipmentSpecialServices;
    }
    
    /**
     * Set FedExEuropeFirstOrigin
     *
     * @param boolean $fedExEuropeFirstOrigin
     * @return LocationDescription
     */
    public function setFedExEuropeFirstOrigin($fedExEuropeFirstOrigin)
    {
        $this->__set('FedExEuropeFirstOrigin', $fedExEuropeFirstOrigin);
        $this->FedExEuropeFirstOrigin = $fedExEuropeFirstOrigin;
        return $this;
    }
    
    /**
     * Returns Set FedExEuropeFirstOrigin
     *
     * @return boolean
     */
    public function getFedExEuropeFirstOrigin()
    {
        return $this->FedExEuropeFirstOrigin;
    }
    

    
}