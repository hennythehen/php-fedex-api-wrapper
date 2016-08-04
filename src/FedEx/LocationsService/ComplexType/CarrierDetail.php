<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CarrierDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class CarrierDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Carrier' => 'CarrierCodeType',
'ServiceCategory' => 'ServiceCategoryType',
'ServiceType' => 'ServiceType',
'CountryRelationship' => 'CountryRelationshipType',
'NormalLatestDropOffDetails' => 'LatestDropOffDetail',
'ExceptionalLatestDropOffDetails' => 'LatestDropOffDetail',
'EffectiveLatestDropOffDetails' => 'LatestDropOffDetail',
'ShippingHolidays' => 'ShippingHoliday',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CarrierDetail';

        
    /**
     * @var \FedEx\LocationsService\SimpleType\CarrierCodeType|string
     */
    public $Carrier;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\ServiceCategoryType|string
     */
    public $ServiceCategory;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\ServiceType|string
     */
    public $ServiceType;

        
    /**
     * @var \FedEx\LocationsService\SimpleType\CountryRelationshipType|string
     */
    public $CountryRelationship;

        
    /**
     * @var LatestDropOffDetail[]
     */
    public $NormalLatestDropOffDetails = array();

        
    /**
     * @var LatestDropOffDetail[]
     */
    public $ExceptionalLatestDropOffDetails = array();

        
    /**
     * @var LatestDropOffDetail
     */
    public $EffectiveLatestDropOffDetails;

        
    /**
     * @var ShippingHoliday[]
     */
    public $ShippingHolidays = array();



    /**
     * Set Carrier
     *
     * @param \FedEx\LocationsService\SimpleType\CarrierCodeType|string $carrier
     * @return CarrierDetail
     */
    public function setCarrier($carrier)
    {
        $this->__set('Carrier', $carrier);
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Returns Set Carrier
     *
     * @return \FedEx\LocationsService\SimpleType\CarrierCodeType|string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    
    /**
     * Set ServiceCategory
     *
     * @param \FedEx\LocationsService\SimpleType\ServiceCategoryType|string $serviceCategory
     * @return CarrierDetail
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->__set('ServiceCategory', $serviceCategory);
        $this->ServiceCategory = $serviceCategory;
        return $this;
    }
    
    /**
     * Returns Set ServiceCategory
     *
     * @return \FedEx\LocationsService\SimpleType\ServiceCategoryType|string
     */
    public function getServiceCategory()
    {
        return $this->ServiceCategory;
    }
    
    /**
     * Set ServiceType
     *
     * @param \FedEx\LocationsService\SimpleType\ServiceType|string $serviceType
     * @return CarrierDetail
     */
    public function setServiceType($serviceType)
    {
        $this->__set('ServiceType', $serviceType);
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\LocationsService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * This field describe a subset of the carrier's products or services which may have unique characteristics: i.e. latest drop-off times at a particular location vary depending on the destination type.
     *
     * @param \FedEx\LocationsService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return CarrierDetail
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->__set('CountryRelationship', $countryRelationship);
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    
    /**
     * Returns This field describe a subset of the carrier's products or services which may have unique characteristics: i.e. latest drop-off times at a particular location vary depending on the destination type.
     *
     * @return \FedEx\LocationsService\SimpleType\CountryRelationshipType|string
     */
    public function getCountryRelationship()
    {
        return $this->CountryRelationship;
    }
    
    /**
     * Specifies the details about the latest times a drop off can be made at a location most days. These are the normal drop off times.
     *
     * @param LatestDropOffDetail[] $normalLatestDropOffDetails
     * @return CarrierDetail
     */
    public function setNormalLatestDropOffDetails(array $normalLatestDropOffDetails)
    {
        $this->__set('NormalLatestDropOffDetails', $normalLatestDropOffDetails);
        $this->NormalLatestDropOffDetails = $normalLatestDropOffDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the latest times a drop off can be made at a location most days. These are the normal drop off times.
     *
     * @return LatestDropOffDetail[]
     */
    public function getNormalLatestDropOffDetails()
    {
        return $this->NormalLatestDropOffDetails;
    }
    
    /**
     * Specifies the details about the exceptional latest times a drop off can be made at a location. These are drop off times that are a variation from the normal drop off times.
     *
     * @param LatestDropOffDetail[] $exceptionalLatestDropOffDetails
     * @return CarrierDetail
     */
    public function setExceptionalLatestDropOffDetails(array $exceptionalLatestDropOffDetails)
    {
        $this->__set('ExceptionalLatestDropOffDetails', $exceptionalLatestDropOffDetails);
        $this->ExceptionalLatestDropOffDetails = $exceptionalLatestDropOffDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the exceptional latest times a drop off can be made at a location. These are drop off times that are a variation from the normal drop off times.
     *
     * @return LatestDropOffDetail[]
     */
    public function getExceptionalLatestDropOffDetails()
    {
        return $this->ExceptionalLatestDropOffDetails;
    }
    
    /**
     * Specifies the details about the effective latest times drop off can be made at a location on the date requested. These are drop off times that are derived from the normal and exceptional drop off times, depending upon the date requested.
     *
     * @param LatestDropOffDetail $effectiveLatestDropOffDetails
     * @return CarrierDetail
     */
    public function setEffectiveLatestDropOffDetails(LatestDropOffDetail $effectiveLatestDropOffDetails)
    {
        $this->__set('EffectiveLatestDropOffDetails', $effectiveLatestDropOffDetails);
        $this->EffectiveLatestDropOffDetails = $effectiveLatestDropOffDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the effective latest times drop off can be made at a location on the date requested. These are drop off times that are derived from the normal and exceptional drop off times, depending upon the date requested.
     *
     * @return LatestDropOffDetail
     */
    public function getEffectiveLatestDropOffDetails()
    {
        return $this->EffectiveLatestDropOffDetails;
    }
    
    /**
     * Set ShippingHolidays
     *
     * @param ShippingHoliday[] $shippingHolidays
     * @return CarrierDetail
     */
    public function setShippingHolidays(array $shippingHolidays)
    {
        $this->__set('ShippingHolidays', $shippingHolidays);
        $this->ShippingHolidays = $shippingHolidays;
        return $this;
    }
    
    /**
     * Returns Set ShippingHolidays
     *
     * @return ShippingHoliday[]
     */
    public function getShippingHolidays()
    {
        return $this->ShippingHolidays;
    }
    

    
}